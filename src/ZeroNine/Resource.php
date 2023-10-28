<?php

namespace SimpleSquid\Vend\ZeroNine;

use Saloon\Http\Connector;

class Resource
{
    public function __construct(
        protected Connector $connector,
    ) {
    }
}
