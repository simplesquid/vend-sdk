<?php

namespace SimpleSquid\Vend\ThreeZeroBeta;

use Saloon\Http\Connector;

class Resource
{
    public function __construct(
        protected Connector $connector,
    ) {
    }
}
