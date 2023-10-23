<?php

namespace SimpleSquid\Vend\ThreeZero;

use Saloon\Http\Connector;

class Resource
{
	public function __construct(
		protected Connector $connector,
	) {
	}
}
