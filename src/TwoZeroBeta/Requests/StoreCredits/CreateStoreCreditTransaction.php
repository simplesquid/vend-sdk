<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateStoreCreditTransaction
 *
 * Creates a new store credit transaction. The type determines what sort of transaction it is.
 *
 * *
 * "REDEMPTION" - Use this type when you want to redeem a certain amount from the store credit balance.
 * The amount MUST be negative. If you want to add an amount to the balance use the "ISSUE" type.
 * *
 * "ISSUE" - Use this type when you issue store credit to a customer.
 * * "REVERSE" - Use this type when
 * voiding an earlier ISSUE or REDEMPTION transaction.
 *
 * If the customer account does not have enough
 * credit to honour a REDEMPTION transaction a 422 HTTP status code will be returned.
 *
 * ## Idempotency
 *
 *
 * Please populate the client_id field with a unique transaction identifier, to ensure that the
 * transaction is safe from double-submit problems. See [the tutorial](/docs/store_credit#idempotency)
 * for more information.
 */
class CreateStoreCreditTransaction extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/store_credits/{$this->customerId}/transactions";
    }

    /**
     * @param  string  $customerId The customer id to apply the store transaction to.
     */
    public function __construct(
        protected string $customerId,
    ) {
    }
}
