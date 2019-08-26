<?php

namespace SimpleSquid\Vend;

use GuzzleHttp\Client;
use SimpleSquid\Vend\Actions\ManagesInventory;
use SimpleSquid\Vend\Actions\ManagesProductImages;
use SimpleSquid\Vend\Actions\ManagesProducts;
use SimpleSquid\Vend\Actions\ManagesResources;
use SimpleSquid\Vend\Exceptions\AuthorisationException;

class Vend
{
    use MakesHttpRequests,
        ManagesResources,
        ManagesProducts,
        ManagesProductImages,
        ManagesInventory;

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
     * @var string
     */
    private $personalAccessToken;

    /**
     * Create a new Vend instance.
     *
     * @param  string  $domainPrefix
     * @param  Client  $guzzle
     *
     * @return void
     */
    public function __construct(string $domainPrefix = null, Client $guzzle = null)
    {
        $this->makeClient($domainPrefix, $guzzle);
    }

    private function makeClient($domainPrefix, $guzzle): void
    {
        $this->domainPrefix = $domainPrefix;

        $this->guzzle = $guzzle ?: new Client([
                                                  'base_uri'    => "https://$domainPrefix.vendhq.com/api/",
                                                  'http_errors' => false,
                                                  'verify'      => true,
                                                  'headers'     => [
                                                      'Accept'       => 'application/json',
                                                      'Content-Type' => 'application/json'
                                                  ]
                                              ]);
    }

    /**
     * Get the current access token or refresh and return a new one.
     *
     * @return string
     * @throws AuthorisationException
     */
    public function getAccessToken(): string
    {
        if (isset($this->personalAccessToken)) {
            return $this->personalAccessToken;
        } elseif (isset($this->accessToken)) {
            return $this->accessToken;
        }

        throw new AuthorisationException();
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
        if (isset($this->personalAccessToken)) {
            return true;
        }

        return false;
    }

    /**
     * Sets the personal access token
     *
     * @param  string  $personalAccessToken
     * @return self
     */
    public function setPersonalAccessToken(string $personalAccessToken): self
    {
        $this->personalAccessToken = $personalAccessToken;

        return $this;
    }
}