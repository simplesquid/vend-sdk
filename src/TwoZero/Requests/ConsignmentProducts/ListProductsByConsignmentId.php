<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListProductsByConsignmentID
 *
 * Returns a collection of consignment products associated with the specified consignment.
 */
class ListProductsByConsignmentId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/consignments/{$this->consignmentId}/products";
	}


	/**
	 * @param string $consignmentId The consignment id
	 * @param null|int $before The upper limit for the version numbers to be included in the response.
	 * @param null|int $pageSize The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected string $consignmentId,
		protected ?int $before = null,
		protected ?int $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['before' => $this->before, 'page_size' => $this->pageSize]);
	}
}
