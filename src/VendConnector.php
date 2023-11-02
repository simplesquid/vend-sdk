<?php

namespace SimpleSquid\Vend;

use Composer\InstalledVersions;
use Saloon\Contracts\Authenticator;
use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\Connector;
use Saloon\Traits\OAuth2\AuthorizationCodeGrant;
use Saloon\Traits\Plugins\AcceptsJson;
use SimpleSquid\Vend\Common\Exceptions\DomainPrefixMissingException;
use SimpleSquid\Vend\Common\Responses\VendResponse;

abstract class VendConnector extends Connector
{
    use AcceptsJson;
    use AuthorizationCodeGrant;

    protected ?string $response = VendResponse::class;

    protected ?string $domainPrefix;

    /**
     * @var callable(): ?\Saloon\Contracts\Authenticator
     */
    protected $defaultAuth;

    public function __construct(
        ?string $clientId = null,
        ?string $clientSecret = null,
        ?string $redirectUri = null,
    ) {
        if (is_null($clientId) || is_null($clientSecret) || is_null($redirectUri)) {
            return;
        }

        $this->oauthConfig()
            ->setClientId($clientId)
            ->setClientSecret($clientSecret)
            ->setRedirectUri($redirectUri);
    }

    public function resolveBaseUrl(): string
    {
        if (is_null($this->domainPrefix)) {
            throw new DomainPrefixMissingException();
        }

        return "https://{$this->domainPrefix}.vendhq.com/api";
    }

    public function withDomainPrefix(string $domainPrefix): static
    {
        $this->domainPrefix = $domainPrefix;

        return $this;
    }

    /**
     * @param  callable(): ?\Saloon\Contracts\Authenticator  $callable
     */
    public function authenticateWith(callable $callable): static
    {
        $this->defaultAuth = $callable;
    }

    protected function defaultHeaders(): array
    {
        return [
            'User-Agent' => 'SimpleSquid-Vend/'.InstalledVersions::getVersion('simplesquid/vend'),
        ];
    }

    protected function defaultOauthConfig(): OAuthConfig
    {
        return OAuthConfig::make()
            ->setAuthorizeEndpoint('https://secure.vendhq.com/connect')
            ->setTokenEndpoint('/1.0/token')
            ->setUserEndpoint('/2.0/retailer');
    }

    protected function defaultAuth(): ?Authenticator
    {
        return isset($this->defaultAuth) ? ($this->defaultAuth)() : null;
    }
}