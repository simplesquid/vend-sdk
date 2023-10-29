<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\CreateGiftCard;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\CreateGiftCardTransaction;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\FindGiftCard;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\FindGiftCardFromTransaction;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\ListGiftCards;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\ReverseGiftCardTransaction;
use SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards\VoidGiftCard;

class GiftCards extends Resource
{
    public function listGiftCards(
        ?string $before,
        ?int $pageSize,
        ?string $cardNumber,
        ?string $status,
    ): Response {
        return $this->connector->send(new ListGiftCards($before, $pageSize, $cardNumber, $status));
    }

    public function createGiftCard(): Response
    {
        return $this->connector->send(new CreateGiftCard());
    }

    public function findGiftCard(
        string $number,
    ): Response {
        return $this->connector->send(new FindGiftCard($number));
    }

    public function voidGiftCard(
        string $number,
    ): Response {
        return $this->connector->send(new VoidGiftCard($number));
    }

    public function createGiftCardTransaction(
        string $number,
    ): Response {
        return $this->connector->send(new CreateGiftCardTransaction($number));
    }

    public function findGiftCardFromTransaction(
        string $transactionId,
    ): Response {
        return $this->connector->send(new FindGiftCardFromTransaction($transactionId));
    }

    public function reverseGiftCardTransaction(
        string $transactionId,
    ): Response {
        return $this->connector->send(new ReverseGiftCardTransaction($transactionId));
    }
}
