<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\CreateGiftCard;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\CreateGiftCardTransaction;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\FindGiftCard;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\FindGiftCardByTransactionId;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\ListGiftCards;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\ReverseGiftCardTransaction;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\VoidGiftCard;
use SimpleSquid\Vend\TwoZeroBeta\Resource;

class GiftCards extends Resource
{
	/**
	 * @param string $before The upper limit for the ID to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response. NOTE: 200 is the maximum value of the page_size parameter.
	 * @param string $cardNumber Find by gift card number.
	 * @param string $status Filter by gift card status.
	 */
	public function listGiftCards(?string $before, ?int $pageSize, ?string $cardNumber, ?string $status): Response
	{
		return $this->connector->send(new ListGiftCards($before, $pageSize, $cardNumber, $status));
	}


	public function createGiftCard(): Response
	{
		return $this->connector->send(new CreateGiftCard());
	}


	/**
	 * @param string $number The number of the gift card to find.
	 */
	public function findGiftCard(string $number): Response
	{
		return $this->connector->send(new FindGiftCard($number));
	}


	/**
	 * @param string $number The number of the gift card to be voided.
	 */
	public function voidGiftCard(string $number): Response
	{
		return $this->connector->send(new VoidGiftCard($number));
	}


	/**
	 * @param string $number The number of the gift card to add the transaction to.
	 */
	public function createGiftCardTransaction(string $number): Response
	{
		return $this->connector->send(new CreateGiftCardTransaction($number));
	}


	/**
	 * @param string $transactionId The transaction id of the gift card transaction to find.
	 */
	public function findGiftCardByTransactionId(string $transactionId): Response
	{
		return $this->connector->send(new FindGiftCardByTransactionId($transactionId));
	}


	/**
	 * @param string $transactionId The transaction id to be reversed for the gift card.
	 */
	public function reverseGiftCardTransaction(string $transactionId): Response
	{
		return $this->connector->send(new ReverseGiftCardTransaction($transactionId));
	}
}
