<?php

namespace SimpleSquid\Vend\TwoOneBeta;

use Saloon\Http\Connector;

class Resource
{
    public function __construct(
        protected Connector $connector,
    ) {
    }
}
