<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\PromoCode\DeletePromoCodes;
use SimpleSquid\Vend\TwoZero\Requests\PromoCode\GetActivePromoCodes;

class PromoCode extends Resource
{
    public function deletePromoCodes(): Response
    {
        return $this->connector->send(new DeletePromoCodes());
    }

    public function getActivePromoCodes(): Response
    {
        return $this->connector->send(new GetActivePromoCodes());
    }
}
