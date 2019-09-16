<?php

namespace SimpleSquid\Vend;

use Carbon\Carbon;
use GuzzleHttp\Client;
use SimpleSquid\Vend\Concerns\AuthorisesWithOAuth;
use SimpleSquid\Vend\Concerns\AuthorisesWithToken;
use SimpleSquid\Vend\Concerns\HasActionManagers;
use SimpleSquid\Vend\Concerns\MakesHttpRequests;
use SimpleSquid\Vend\Exceptions\AuthorisationException;
use SimpleSquid\Vend\Exceptions\TokenExpiredException;
use SimpleSquid\Vend\Resources\OneDotZero\Token;

class Vend
{
    use MakesHttpRequests,
        AuthorisesWithToken,
        AuthorisesWithOAuth,
        HasActionManagers;

    /** @var int */
    public $confirmation_timeout = 30;

    /** @var Client */
    public $guzzle;

    /** @var self */
    private static $instance;

    /** @var int */
    public $request_timeout = 2;

    /** @var Token */
    public $token;

    /** @var string */
    public $user_agent = 'Vend PHP SDK';

    /**
     * Vend constructor.
     */
    private function __construct()
    {
        $this->guzzle = new Client([
                                       'http_errors' => false,
                                       'verify'      => true,
                                       'headers'     => [
                                           'Accept' => 'application/json',
                                       ],
                                   ]);

        $this->token = new Token([]);

        $this->loadActionManagers();
    }

    /**
     * Sets the authorisation token.
     *
     * @param  Token  $token
     *
     * @return self
     */
    public function authorisationToken(Token $token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Set a new confirmation timeout in seconds.
     *
     * @param  int  $confirmation_timeout
     *
     * @return self
     */
    public function confirmationTimeout(int $confirmation_timeout): self
    {
        $this->confirmation_timeout = $confirmation_timeout;

        return $this;
    }

    /**
     * Set domain prefix.
     *
     * @param  string  $domain_prefix
     *
     * @return self
     */
    public function domainPrefix(string $domain_prefix): self
    {
        $this->token->domain_prefix = $domain_prefix;

        return $this;
    }

    /**
     * Get the current access token.
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
     * Get domain prefix.
     *
     * @return string
     */
    public function getDomainPrefix(): string
    {
        return $this->token->domain_prefix;
    }

    /**
     * Create or retrieve the instance of Vend client.
     *
     * @return self
     */
    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new Vend();
        }

        return static::$instance;
    }

    /**
     * Set a new request timeout in seconds.
     *
     * @param  int  $request_timeout
     *
     * @return self
     */
    public function requestTimeout(int $request_timeout): self
    {
        $this->request_timeout = $request_timeout;

        return $this;
    }

    /**
     * Set user agent.
     *
     * @param  string  $user_agent
     *
     * @return self
     */
    public function userAgent(string $user_agent): self
    {
        $this->user_agent = $user_agent;
        return $this;
    }
}