<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\OutletTaxCollection;

trait ManagesOutletProductTaxes
{
    /**
     * List outlet product taxes.
     * Returns a paginated list of outlet-product-tax records.
     *
     * @param  string  $outlet_id  The ID of the outlet for which the results should be returned.
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after  The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before  The upper limit for the version numbers to be included in the response.
     * @param  bool|null  $deleted  Indicates whether deleted items should be included in the response.
     *
     * @return OutletTaxCollection
     */
    public function outletProductTaxes(
        string $outlet_id,
        int $page_size = null,
        int $after = null,
        int $before = null,
        bool $deleted = null
    ): OutletTaxCollection {
        return $this->collection(OutletTaxCollection::class, "2.0/outlet_taxes",
                                 compact('outlet_id', 'after', 'before', 'page_size', 'deleted'));
    }

}