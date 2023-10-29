<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\PaymentTypes\ListPaymentTypes;

class PaymentTypes extends Resource
{
    public function listPaymentTypes(
        ?int $before,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new ListPaymentTypes($before, $pageSize));
    }
}
