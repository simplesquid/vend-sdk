<?php

namespace SimpleSquid\Vend;

use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\Connector;
use Saloon\Traits\OAuth2\AuthorizationCodeGrant;
use SimpleSquid\Vend\Common\Exceptions\AuthenticationDetailsMissingException;
use SimpleSquid\Vend\Common\Exceptions\DomainPrefixMissingException;
use SimpleSquid\Vend\Common\Responses\VendResponse;

abstract class VendConnector extends Connector
{
    use AuthorizationCodeGrant;

    protected ?string $response = VendResponse::class;

    public function __construct(
        string $clientId = null,
        string $clientSecret = null,
        string $redirectUri = null,
        string $personalToken = null,
        protected ?string $domainPrefix = null
    ) {
        if (! is_null($personalToken)) {
            $this->withTokenAuth($personalToken);

            return;
        }

        if (! is_null($clientId) && ! is_null($clientSecret) && ! is_null($redirectUri)) {
            $this->oauthConfig()
                ->setClientId($clientId)
                ->setClientSecret($clientSecret)
                ->setRedirectUri($redirectUri);

            return;
        }

        throw new AuthenticationDetailsMissingException();
    }

    public function resolveBaseUrl(): string
    {
        if (is_null($this->domainPrefix)) {
            throw new DomainPrefixMissingException();
        }

        return "https://{$this->domainPrefix}.vendhq.com/api";
    }

    public function setDomainPrefix(string $domainPrefix): static
    {
        $this->domainPrefix = $domainPrefix;

        return $this;
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    protected function defaultOauthConfig(): OAuthConfig
    {
        return OAuthConfig::make()
            ->setAuthorizeEndpoint('https://secure.vendhq.com/connect')
            ->setTokenEndpoint('/1.0/token')
            ->setUserEndpoint('/2.0/retailer');
    }
}
