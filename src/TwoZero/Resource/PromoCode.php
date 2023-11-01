<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\PromoCode\DeletePromoCodes;
use SimpleSquid\Vend\TwoZero\Requests\PromoCode\GetPromoCodeStatuses;

class PromoCode extends Resource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function deletePromoCodes(
        array $payload,
    ): Response {
        return $this->connector->send(new DeletePromoCodes($payload));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function getPromoCodeStatuses(
        array $payload,
    ): Response {
        return $this->connector->send(new GetPromoCodeStatuses($payload));
    }
}
