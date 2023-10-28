<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\PaymentTypes\ListPaymentTypes;

class PaymentTypes extends Resource
{
    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function listPaymentTypes(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListPaymentTypes($before, $pageSize));
    }
}
