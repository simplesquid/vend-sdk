<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Outlet;
use SimpleSquid\Vend\Resources\TwoDotZero\OutletCollection;

trait ManagesOutlets
{
    /**
     * Get a single outlet.
     * Returns a single outlet with the requested ID.
     *
     * @param  string  $id  Valid Outlet ID.
     *
     * @return Outlet
     */
    public function outlet(string $id): Outlet
    {
        return $this->single(Outlet::class, "2.0/outlets/$id");
    }

    /**
     * List outlets.
     * Returns a collection of outlets.
     *
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after  The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before  The upper limit for the version numbers to be included in the response.
     * @param  bool|null  $deleted  Indicates whether deleted items should be included in the response.
     *
     * @return OutletCollection
     */
    public function outlets(
        int $page_size = null,
        int $after = null,
        int $before = null,
        bool $deleted = null
    ): OutletCollection {
        return $this->collection(OutletCollection::class, "2.0/outlets",
                                 compact('after', 'before', 'page_size', 'deleted'));
    }

}