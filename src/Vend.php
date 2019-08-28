<?php

namespace SimpleSquid\Vend;

use Carbon\Carbon;
use GuzzleHttp\Client;
use SimpleSquid\Vend\Exceptions\AuthorisationException;
use SimpleSquid\Vend\Exceptions\TokenExpiredException;
use SimpleSquid\Vend\Resources\OneDotZero\Token;

class Vend
{
    use MakesHttpRequests,
        AuthorisesWithToken,
        AuthorisesWithOAuth,
        HasActionManagers;

    /**
     * Number of seconds a request is retried.
     *
     * @var int
     */
    private $confirmationTimeout = 30;

    /**
     * Vend domain prefix.
     *
     * @var string
     */
    private $domainPrefix;

    /**
     * The Guzzle HTTP Client instance.
     *
     * @var Client
     */
    public $guzzle;

    /**
     * Single instance.
     *
     * @var self
     */
    private static $instance;

    /**
     * Number of seconds the request is allowed to run for.
     *
     * @var int
     */
    private $requestTimeout = 2;

    /**
     * Authorisation token.
     *
     * @var Token
     */
    private $token;

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
     *
     * @return self
     */
    public function setConfirmationTimeout(int $confirmationTimeout): self
    {
        $this->confirmationTimeout = $confirmationTimeout;

        return $this;
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
     *
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
     * Make the Vend API client.
     *
     * @param  string  $userAgent
     * @param  Client|null  $guzzle
     *
     * @return Vend
     */
    public function makeClient(string $userAgent, Client $guzzle = null): self
    {
        $this->guzzle = $guzzle ?? new Client([
                                                  'http_errors' => false,
                                                  'verify'      => true,
                                                  'headers'     => [
                                                      'Accept'     => 'application/json',
                                                      'User-Agent' => $userAgent,
                                                  ],
                                              ]);

        return $this;
    }
}