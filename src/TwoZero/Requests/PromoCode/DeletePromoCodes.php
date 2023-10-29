<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PromoCode;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeletePromoCodes extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/promocode/bulk';
    }
}
