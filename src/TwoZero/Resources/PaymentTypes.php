<?php

namespace SimpleSquid\Vend\TwoZero\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\PaymentTypes\ListPaymentTypes;

class PaymentTypes extends BaseResource
{
    public function listPaymentTypes(
        ?int $after = null,
        ?int $before = null,
        ?bool $deleted = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListPaymentTypes($after, $before, $deleted, $pageSize));
    }
}
