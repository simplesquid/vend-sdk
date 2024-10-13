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
     * @var ?callable(static): ?\Saloon\Contracts\Authenticator
     */
    protected $defaultAuth = null;

    public ?int $tries = 3;

    public ?int $retryInterval = 500;

    public ?bool $useExponentialBackoff = true;

    public ?bool $throwOnMaxTries = false;

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
            throw new DomainPrefixMissingException;
        }

        return "https://{$this->domainPrefix}.retail.lightspeed.app/api";
    }

    public function withDomainPrefix(?string $domainPrefix): static
    {
        $this->domainPrefix = $domainPrefix;

        return $this;
    }

    /**
     * @param  callable(static): ?\Saloon\Contracts\Authenticator  $callable
     */
    public function authenticateWith(callable $callable): static
    {
        $this->defaultAuth = $callable;

        return $this;
    }

    protected function defaultHeaders(): array
    {
        return [
            'User-Agent' => 'SimpleSquid-Vend/'.InstalledVersions::getVersion('simplesquid/vend-sdk'),
        ];
    }

    protected function defaultOauthConfig(): OAuthConfig
    {
        return OAuthConfig::make()
            ->setAuthorizeEndpoint('https://secure.retail.lightspeed.app/connect')
            ->setTokenEndpoint('/1.0/token')
            ->setUserEndpoint('/2.0/retailer');
    }

    protected function defaultAuth(): ?Authenticator
    {
        return is_callable($this->defaultAuth) ? ($this->defaultAuth)($this) : null;
    }
}
