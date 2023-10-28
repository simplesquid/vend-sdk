<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ZeroNine\Requests\PaymentTypes\ListPaymentTypes;

class PaymentTypes extends Resource
{
    public function listPaymentTypes(): Response
    {
        return $this->connector->send(new ListPaymentTypes());
    }
}
