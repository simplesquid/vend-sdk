<?php

namespace SimpleSquid\Vend\Concerns;

use SimpleSquid\Vend\Resources\OneDotZero\Token;

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
        $this->token = new Token(compact('access_token'));

        return $this;
    }
}