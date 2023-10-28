<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\ZeroNine\Requests\PaymentTypes\ListPaymentTypes;
use SimpleSquid\Vend\ZeroNine\Resource;

class PaymentTypes extends Resource
{
    public function listPaymentTypes(): Response
    {
        return $this->connector->send(new ListPaymentTypes());
    }
}
