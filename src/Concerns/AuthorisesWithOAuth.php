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
use SimpleSquid\Vend\Vend;

trait AuthorisesWithOAuth
{
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
     * OAuth Redirect URI.
     *
     * @var string
     */
    private $redirectURI;

    /**
     * Get the URL to get OAuth 2.0 authorisation.
     *
     * @param  string  $previousURL
     *
     * @return string
     */
    public function getAuthorisationUrl(string $previousURL): string
    {
        return "https://secure.vendhq.com/connect?response_type=code&client_id=$this->clientID&redirect_uri=$this->redirectURI&state=$previousURL";
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
     * @param  string  $domainPrefix
     * @param  Token   $token
     *
     * @return Vend
     */
    public function setOAuthAuthorisationToken(string $domainPrefix, Token $token)
    {
        $this->domainPrefix = $domainPrefix;
        $this->token = $token;

        return $this;
    }

    /**
     * Sets the OAuth 2.0 identifiers.
     *
     * @param  string  $clientID
     * @param  string  $clientSecret
     * @param  string  $redirectURI
     *
     * @return self
     */
    public function setOAuthIdentifiers(string $clientID, string $clientSecret, string $redirectURI): self
    {
        $this->clientID = $clientID;
        $this->clientSecret = $clientSecret;
        $this->redirectURI = $redirectURI;

        return $this;
    }
}