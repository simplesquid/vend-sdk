<?php

namespace SimpleSquid\Vend\TwoZeroBeta;

use Saloon\Http\Connector;

class Resource
{
	public function __construct(
		protected Connector $connector,
	) {
	}
}
