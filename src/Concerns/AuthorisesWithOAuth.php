<?php

namespace SimpleSquid\Vend\Concerns;

use SimpleSquid\Vend\Exceptions\AuthorisationException;
use SimpleSquid\Vend\Exceptions\BadRequestException;
use SimpleSquid\Vend\Exceptions\NotFoundException;
use SimpleSquid\Vend\Exceptions\RateLimitException;
use SimpleSquid\Vend\Exceptions\RequestException;
use SimpleSquid\Vend\Exceptions\TokenExpiredException;
use SimpleSquid\Vend\Exceptions\UnauthorisedException;
use SimpleSquid\Vend\Exceptions\UnknownException;
use SimpleSquid\Vend\Resources\OneDotZero\Token;

trait AuthorisesWithOAuth
{
    /** @var string */
    public $client_id;

    /** @var string */
    public $client_secret;

    /** @var string */
    public $redirect_uri;

    /**
     * Set client ID.
     *
     * @param  string  $client_id
     *
     * @return self
     */
    public function clientId(string $client_id): self
    {
        $this->client_id = $client_id;

        return $this;
    }

    /**
     * Set client secret.
     *
     * @param  string  $client_secret
     *
     * @return self
     */
    public function clientSecret(string $client_secret): self
    {
        $this->client_secret = $client_secret;

        return $this;
    }

    /**
     * Get the URL to get OAuth 2.0 authorisation.
     *
     * @param  string  $previousURL
     *
     * @return string
     */
    public function getAuthorisationUrl(string $previousURL): string
    {
        return "https://secure.vendhq.com/connect?response_type=code&client_id=$this->client_id&redirect_uri=$this->redirect_uri&state=$previousURL";
    }

    /**
     * Sets the OAuth 2.0 authorisation code.
     *
     * @param  string  $domainPrefix
     * @param  string  $code
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
    public function oAuthAuthorisationCode(string $code)
    {
        return $this->token = new Token($this->post('1.0/token', [
            'code'          => $code,
            'client_id'     => $this->client_id,
            'client_secret' => $this->client_secret,
            'grant_type'    => 'authorization_code',
            'redirect_uri'  => $this->redirect_uri,
        ], 'form_params', false));
    }

    /**
     * Set redirect URI.
     *
     * @param  string  $redirect_uri
     *
     * @return self
     */
    public function redirectUri(string $redirect_uri): self
    {
        $this->redirect_uri = $redirect_uri;

        return $this;
    }

    /**
     * Refreshes the OAuth 2.0 authorisation token.
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
        $domain_prefix = $this->getDomainPrefix();

        $this->token = new Token($this->post('1.0/token', [
            'refresh_token' => $refresh_token = $this->token->refresh_token,
            'client_id'     => $this->client_id,
            'client_secret' => $this->client_secret,
            'grant_type'    => 'refresh_token',
        ], 'form_params', false));

        if (is_null($this->token->refresh_token)) {
            $this->token->refresh_token = $refresh_token;
        }

        if (is_null($this->token->domain_prefix)) {
            $this->token->domain_prefix = $domain_prefix;
        }

        return $this->token;
    }
}