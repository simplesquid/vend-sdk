<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\PromoCode\DeletePromoCodesBulk;
use SimpleSquid\Vend\TwoZero\Requests\PromoCode\GetActivePromoCodesBulk;

class PromoCode extends Resource
{
    public function getActivePromoCodesBulk(): Response
    {
        return $this->connector->send(new GetActivePromoCodesBulk());
    }

    public function deletePromoCodesBulk(): Response
    {
        return $this->connector->send(new DeletePromoCodesBulk());
    }
}
