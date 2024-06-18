<?php

namespace SimpleSquid\Vend;

class VendAuth extends VendConnector
{
    public function resolveBaseUrl(): string
    {
        if (is_null($this->domainPrefix)) {
            return 'https://secure.retail.lightspeed.app';
        }

        return "https://{$this->domainPrefix}.retail.lightspeed.app/api";
    }
}
