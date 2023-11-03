<?php

namespace SimpleSquid\Vend\TwoZero\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\PromoCode\DeletePromoCodes;
use SimpleSquid\Vend\TwoZero\Requests\PromoCode\GetPromoCodeStatuses;

class PromoCode extends BaseResource
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
