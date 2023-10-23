<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ServiceOrders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-agenda-outlet_id
 */
class GetAgendaOutletId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/services_agenda/outlet/{$this->outletId}";
	}


	/**
	 * @param string $outletId
	 */
	public function __construct(
		protected string $outletId,
	) {
	}
}
