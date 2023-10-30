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
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createGiftCard(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateGiftCard($payload));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function createGiftCardTransaction(
        string $number,
        array $payload,
    ): Response {
        return $this->connector->send(new CreateGiftCardTransaction($number, $payload));
    }

    public function findGiftCard(
        string $number,
    ): Response {
        return $this->connector->send(new FindGiftCard($number));
    }

    public function findGiftCardFromTransaction(
        string $transactionId,
    ): Response {
        return $this->connector->send(new FindGiftCardFromTransaction($transactionId));
    }

    public function listGiftCards(
        ?string $before,
        ?string $after,
        ?int $pageSize,
        ?string $cardNumber,
        ?string $status,
    ): Response {
        return $this->connector->send(new ListGiftCards($before, $after, $pageSize, $cardNumber, $status));
    }

    public function reverseGiftCardTransaction(
        string $transactionId,
    ): Response {
        return $this->connector->send(new ReverseGiftCardTransaction($transactionId));
    }

    public function voidGiftCard(
        string $number,
    ): Response {
        return $this->connector->send(new VoidGiftCard($number));
    }
}
