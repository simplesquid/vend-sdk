<?php

namespace SimpleSquid\Vend\TwoZeroBeta;

use SimpleSquid\Vend\TwoZeroBeta\Resource\Audit;
use SimpleSquid\Vend\TwoZeroBeta\Resource\GiftCards;
use SimpleSquid\Vend\TwoZeroBeta\Resource\PartnerBilling;
use SimpleSquid\Vend\TwoZeroBeta\Resource\StoreCredits;
use SimpleSquid\Vend\TwoZeroBeta\Resource\VariantAttributes;
use SimpleSquid\Vend\TwoZeroBeta\Resource\Webhooks;
use SimpleSquid\Vend\TwoZeroBeta\Resource\Workflows;
use SimpleSquid\Vend\VendConnector;

/**
 * API 2.0 Beta
 *
 * Beta endpoints for version 2.0 of the Vend API.
 */
class VendTwoZeroBeta extends VendConnector
{
    public function resolveBaseUrl(): string
    {
        return parent::resolveBaseUrl().'/2.0';
    }

    public function audit(): Audit
    {
        return new Audit($this);
    }

    public function giftCards(): GiftCards
    {
        return new GiftCards($this);
    }

    public function partnerBilling(): PartnerBilling
    {
        return new PartnerBilling($this);
    }

    public function storeCredits(): StoreCredits
    {
        return new StoreCredits($this);
    }

    public function variantAttributes(): VariantAttributes
    {
        return new VariantAttributes($this);
    }

    public function webhooks(): Webhooks
    {
        return new Webhooks($this);
    }

    public function workflows(): Workflows
    {
        return new Workflows($this);
    }
}
