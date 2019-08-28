<?php

namespace SimpleSquid\Vend;

use Carbon\Carbon;
use GuzzleHttp\Client;
use SimpleSquid\Vend\Actions\ManagesBrands;
use SimpleSquid\Vend\Actions\ManagesChannelRequestLog;
use SimpleSquid\Vend\Actions\ManagesConsignments;
use SimpleSquid\Vend\Actions\ManagesCustomerGroups;
use SimpleSquid\Vend\Actions\ManagesCustomers;
use SimpleSquid\Vend\Actions\ManagesInventory;
use SimpleSquid\Vend\Actions\ManagesOutletProductTaxes;
use SimpleSquid\Vend\Actions\ManagesOutlets;
use SimpleSquid\Vend\Actions\ManagesPaymentTypes;
use SimpleSquid\Vend\Actions\ManagesPriceBooks;
use SimpleSquid\Vend\Actions\ManagesProductImages;
use SimpleSquid\Vend\Actions\ManagesProducts;
use SimpleSquid\Vend\Actions\ManagesResources;
use SimpleSquid\Vend\Actions\ManagesSearch;
use SimpleSquid\Vend\Exceptions\AuthorisationException;
use SimpleSquid\Vend\Exceptions\BadRequestException;
use SimpleSquid\Vend\Exceptions\NotFoundException;
use SimpleSquid\Vend\Exceptions\RateLimitException;
use SimpleSquid\Vend\Exceptions\RequestException;
use SimpleSquid\Vend\Exceptions\TokenExpiredException;
use SimpleSquid\Vend\Exceptions\UnauthorisedException;
use SimpleSquid\Vend\Exceptions\UnknownException;
use SimpleSquid\Vend\Resources\OneDotZero\Token;

class Vend
{
    use MakesHttpRequests,
        ManagesResources,
        ManagesBrands,
        ManagesChannelRequestLog,
        ManagesConsignments,
        ManagesCustomerGroups,
        ManagesCustomers,
        ManagesInventory,
        ManagesOutletProductTaxes,
        ManagesOutlets,
        ManagesPaymentTypes,
        ManagesPriceBooks,
        ManagesProducts,
        ManagesProductImages,
        ManagesSearch;

    /**
     * Single instance.
     *
     * @var self
     */
    private static $instance;

    /**
     * OAuth Client ID.
     *
     * @var string
     */
    private $clientID;

    /**
     * OAuth Client Secret.
     *
     * @var string
     */
    private $clientSecret;

    /**
     * The Guzzle HTTP Client instance.
     *
     * @var Client
     */
    public $guzzle;

    /**
     * Number of seconds a request is retried.
     *
     * @var int
     */
    private $confirmationTimeout = 30;

    /**
     * OAuth Redirect URI.
     *
     * @var string
     */
    private $redirectURI;

    /**
     * Number of seconds the request is allowed to run for.
     *
     * @var int
     */
    private $requestTimeout = 2;

    /**
     * Vend domain prefix.
     *
     * @var string
     */
    private $domainPrefix;

    /**
     * Personal access token.
     *
     * @var string
     */
    private $personalAccessToken;

    /**
     * Authorisation token.
     *
     * @var Token
     */
    private $token;

    /**
     * Disable instantiation.
     */
    private function __construct()
    {
    }

    /**
     * Create or retrieve the instance of Vend client.
     *
     * @return self
     */
    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new Vend;
            static::$instance->makeClient();
        }

        return static::$instance;
    }

    /**
     * Disable the cloning of this class.
     */
    final private function __clone()
    {
    }

    /**
     * Disable the wakeup of this class.
     */
    final private function __wakeup()
    {
    }

    /**
     * Make the Vend API client.
     *
     * @param  string|null  $userAgent
     * @param  Client|null  $guzzle
     * @return Vend
     */
    public function makeClient(string $userAgent = null, Client $guzzle = null): self
    {
        $this->guzzle = $guzzle ?? new Client([
                                                  'http_errors' => false,
                                                  'verify'      => true,
                                                  'headers'     => [
                                                      'Accept'     => 'application/json',
                                                      'User-Agent' => $userAgent ?? 'Vend SDK (PHP)',
                                                  ],
                                              ]);

        return $this;
    }

    /**
     * Get the current access token or refresh and return a new one.
     *
     * @return string
     *
     * @throws TokenExpiredException
     * @throws AuthorisationException
     */
    public function getAccessToken(): string
    {
        if (!isset($this->token->access_token)) {
            throw new AuthorisationException();
        }

        if (!is_null($this->token->expires) && $this->token->expires < Carbon::now()) {
            throw new TokenExpiredException();
        }

        return $this->token->access_token;
    }

    /**
     * Get the confirmation timeout.
     *
     * @return  int
     */
    public function getConfirmationTimeout(): int
    {
        return $this->confirmationTimeout;
    }

    /**
     * Set a new confirmation timeout.
     *
     * @param  int  $confirmationTimeout
     * @return self
     */
    public function setConfirmationTimeout(int $confirmationTimeout): self
    {
        $this->confirmationTimeout = $confirmationTimeout;

        return $this;
    }

    /**
     * Get the request timeout.
     *
     * @return  int
     */
    public function getRequestTimeout(): int
    {
        return $this->requestTimeout;
    }

    /**
     * Set a new request timeout.
     *
     * @param  int  $requestTimeout
     * @return self
     */
    public function setRequestTimeout(int $requestTimeout): self
    {
        $this->requestTimeout = $requestTimeout;

        return $this;
    }

    /**
     * Checks if the current instance is authorised with an access token.
     *
     * @return bool
     */
    public function isAuthorised(): bool
    {
        return isset($this->token);
    }

    /**
     * Sets the personal access token.
     *
     * @param  string  $domainPrefix
     * @param  string  $access_token
     * @return self
     */
    public function setPersonalAccessToken(string $domainPrefix, string $access_token): self
    {
        $this->domainPrefix = $domainPrefix;
        $this->token = new Token(compact('access_token'));

        return $this;
    }

    /**
     * Sets the OAuth 2.0 identifiers.
     *
     * @param  string  $clientID
     * @param  string  $clientSecret
     * @param  string  $redirectURI
     * @return self
     */
    public function setOAuthIdentifiers(string $clientID, string $clientSecret, string $redirectURI): self
    {
        $this->clientID = $clientID;
        $this->clientSecret = $clientSecret;
        $this->redirectURI = $redirectURI;

        return $this;
    }

    /**
     * Sets the OAuth 2.0 authorisation code.
     *
     * @param  string  $domainPrefix
     * @param  string  $code
     * @return Token
     *
     * @throws AuthorisationException
     * @throws BadRequestException
     * @throws NotFoundException
     * @throws RateLimitException
     * @throws RequestException
     * @throws UnauthorisedException
     * @throws UnknownException
     * @throws TokenExpiredException
     */
    public function setOAuthAuthorisationCode(string $domainPrefix, string $code)
    {
        $this->domainPrefix = $domainPrefix;

        return $this->token = new Token($this->post('1.0/token', [
            'code'          => $code,
            'client_id'     => $this->clientID,
            'client_secret' => $this->clientSecret,
            'grant_type'    => 'authorization_code',
            'redirect_uri'  => $this->redirectURI,
        ], 'form_params', false));
    }

    /**
     * Sets the OAuth 2.0 authorisation code.
     *
     * @return Token
     *
     * @throws AuthorisationException
     * @throws BadRequestException
     * @throws NotFoundException
     * @throws RateLimitException
     * @throws RequestException
     * @throws UnauthorisedException
     * @throws UnknownException
     * @throws TokenExpiredException
     */
    public function refreshOAuthAuthorisationToken()
    {
        $this->token = new Token($this->post('1.0/token', [
            'refresh_token' => $refresh_token = $this->token->refresh_token,
            'client_id'     => $this->clientID,
            'client_secret' => $this->clientSecret,
            'grant_type'    => 'refresh_token',
        ], 'form_params', false));

        if (is_null($this->token->refresh_token)) {
            $this->token->refresh_token = $refresh_token;
        }

        return $this->token;
    }

    /**
     * Sets the OAuth 2.0 authorisation code.
     *
     * @param  string  $domainPrefix
     * @param  Token  $token
     * @return Vend
     */
    public function setOAuthAuthorisationToken(string $domainPrefix, Token $token)
    {
        $this->domainPrefix = $domainPrefix;
        $this->token = $token;

        return $this;
    }

    /**
     * Get the URL to get OAuth 2.0 authorisation.
     *
     * @param  string  $previousURL
     * @return string
     */
    public function getAuthorisationUrl(string $previousURL): string
    {
        return "https://secure.vendhq.com/connect?response_type=code&client_id=$this->clientID&redirect_uri=$this->redirectURI&state=$previousURL";
    }
}