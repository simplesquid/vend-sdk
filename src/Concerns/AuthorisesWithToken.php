<?php

namespace SimpleSquid\Vend\Concerns;

use SimpleSquid\Vend\Resources\OneDotZero\Token;

trait AuthorisesWithToken
{
    /**
     * Sets the personal access token.
     *
     * @param  string  $domainPrefix
     * @param  string  $access_token
     *
     * @return self
     */
    public function setPersonalAccessToken(string $domainPrefix, string $access_token): self
    {
        $this->domainPrefix = $domainPrefix;
        $this->token = new Token(compact('access_token'));

        return $this;
    }
}