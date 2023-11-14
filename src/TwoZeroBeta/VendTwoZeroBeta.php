<?php

namespace SimpleSquid\Vend\TwoZeroBeta;

use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use SimpleSquid\Vend\Common\Paginators\VendCursorPaginator;
use SimpleSquid\Vend\TwoZeroBeta\Resources\Audit;
use SimpleSquid\Vend\TwoZeroBeta\Resources\GiftCards;
use SimpleSquid\Vend\TwoZeroBeta\Resources\PartnerBilling;
use SimpleSquid\Vend\TwoZeroBeta\Resources\StoreCredits;
use SimpleSquid\Vend\TwoZeroBeta\Resources\VariantAttributes;
use SimpleSquid\Vend\TwoZeroBeta\Resources\Webhooks;
use SimpleSquid\Vend\TwoZeroBeta\Resources\Workflows;
use SimpleSquid\Vend\VendConnector;

class VendTwoZeroBeta extends VendConnector implements HasPagination
{
    public function resolveBaseUrl(): string
    {
        return parent::resolveBaseUrl().'/2.0';
    }

    public function paginate(Request $request): VendCursorPaginator
    {
        return new VendCursorPaginator($this, $request);
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
