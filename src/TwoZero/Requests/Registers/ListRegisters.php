<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Registers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListRegisters
 *
 * Returns a paginated list of registers.
 */
class ListRegisters extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/registers";
	}


	/**
	 * @param null|int $before The upper limit for the version numbers to be included in the response.
	 * @param null|bool $deleted Indicates whether deleted items should be included in the response.
	 * @param null|int $pageSize The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected ?int $before = null,
		protected ?bool $deleted = null,
		protected ?int $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['before' => $this->before, 'deleted' => $this->deleted, 'page_size' => $this->pageSize]);
	}
}
