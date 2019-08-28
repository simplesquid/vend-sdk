<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\PaymentTypeCollection;

trait ManagesPaymentTypes
{
    /**
     * List payment types.
     * Returns a paginated collection of payment types.
     *
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after  The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before  The upper limit for the version numbers to be included in the response.
     * @return PaymentTypeCollection
     */

    public function paymentTypes(int $page_size = null, int $after = null, int $before = null): PaymentTypeCollection
    {
        return $this->collection(PaymentTypeCollection::class, "2.0/payment_types",
                                 compact('after', 'before', 'page_size'));
    }
}