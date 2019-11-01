<?php

namespace SimpleSquid\Vend\Concerns;

trait AuthorisesWithToken
{
    /**
     * Sets the personal access token.
     *
     * @param  string  $access_token
     *
     * @return self
     */
    public function personalAccessToken(string $access_token): self
    {
        $this->token->access_token = $access_token;

        return $this;
    }
}
