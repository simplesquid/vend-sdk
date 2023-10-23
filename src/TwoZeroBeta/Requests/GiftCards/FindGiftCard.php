<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * FindGiftCard
 *
 * Finds and returns the given card number. Returns a 404 if the card does not exist.
 *
 * Within the gift
 * card structure returned is the field gift__card__transactions which contains a list of all the
 * transactions associated with the gift card. In this this list you will see one or more of the
 * following statuses:
 *
 * * "ACTIVATION" - This transaction type is added automatically when the gift
 * card is created. The amount will be the initial balance that was loaded onto the gift card.
 * *
 * "REDEEMING" - This status indicates the customer used their gift card to pay for one or more items.
 * The amount MUST be negative.
 * * "IMPORTING" - You should only see this if gift cards were imported
 * into the gift card system.
 * * "VOIDING" - You will see this status if the gift card has been voided.
 * Note that the balance of the card is set to zero when the gift card is voided.
 * * "EXPIRING" - This
 * transaction is added automatically when the gift card expires. Again note that the balance is set to
 * zero when the gift card expires.
 * * "REVERSING" - This status indicates that a given transaction was
 * reversed.
 * * "RELOADING" - This status means that more credit was loaded onto the gift card.
 */
class FindGiftCard extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/gift_cards/{$this->number}";
	}


	/**
	 * @param string $number The number of the gift card to find.
	 */
	public function __construct(
		protected string $number,
	) {
	}
}
