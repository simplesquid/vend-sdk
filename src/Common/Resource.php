<?php

namespace SimpleSquid\Vend\Common;

use SimpleSquid\Vend\VendConnector;

class Resource
{
    public function __construct(
        protected VendConnector $connector,
    ) {
    }
}
