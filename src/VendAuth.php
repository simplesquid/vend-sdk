<?php

namespace SimpleSquid\Vend;

class VendAuth extends VendConnector
{
    public function resolveBaseUrl(): string
    {
        if (is_null($this->domainPrefix)) {
            return 'https://secure.vendhq.com';
        }

        return "https://{$this->domainPrefix}.vendhq.com/api";
    }
}
