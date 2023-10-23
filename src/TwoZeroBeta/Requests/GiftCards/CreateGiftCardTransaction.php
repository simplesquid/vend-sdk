<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateGiftCardTransaction
 *
 * Creates a new gift card transaction. The two most important fields for creating a new gift card
 * transaction are the number of the gift card and the type of the transaction. The type determines
 * what sort of transaction it is.
 *
 * * "REDEEMING" - Use this type when you want to redeem a certain
 * amount from the gift card balance. The amount MUST be negative. If you want to add an amount to the
 * balance use the "RELOADING" type.
 * * "RELOADING" - Use this type when you load a new amount onto a
 * gift card.
 *
 * If the gift card does not have enough credit to honour the transaction a 422 HTTP status
 * code will be returned.
 *
 * ## Idempotency
 *
 *  Please populate the client_id field with a unique
 * transaction identifier, to ensure that the transaction is safe from double-submit problems. See [the
 * tutorial](/docs/gift_cards#idempotency) for more information.
 */
class CreateGiftCardTransaction extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/gift_cards/{$this->number}/transactions";
	}


	/**
	 * @param string $number The number of the gift card to add the transaction to.
	 */
	public function __construct(
		protected string $number,
	) {
	}
}
