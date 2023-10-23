<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * VoidGiftCard
 *
 * Void the given gift card.
 */
class VoidGiftCard extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/gift_cards/{$this->number}";
	}


	/**
	 * @param string $number The number of the gift card to be voided.
	 */
	public function __construct(
		protected string $number,
	) {
	}
}
