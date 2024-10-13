<?php

namespace SimpleSquid\Vend\Common;

use SimpleSquid\Vend\VendConnector;

abstract class BaseResource
{
    public function __construct(
        protected VendConnector $connector,
    ) {}
}
