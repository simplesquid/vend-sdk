<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\PriceBook;
use SimpleSquid\Vend\Resources\TwoDotZero\PriceBookCollection;

trait ManagesPriceBooks
{
    /**
     * Get a single price book.
     * Returns a single price book with a requested ID.
     *
     * @param  string  $id
     * @return PriceBook
     */
    public function priceBook(string $id): PriceBook
    {
        return $this->single(PriceBook::class, "2.0/price_books/$id");
    }

    /**
     * List price books.
     * Returns a paginated list of price books.
     *
     * @param  int|null  $page_size
     * @param  int|null  $after
     * @param  int|null  $before
     * @return PriceBookCollection
     */
    public function priceBooks(int $page_size = null, int $after = null, int $before = null): PriceBookCollection
    {
        return $this->collection(PriceBookCollection::class, '2.0/price_books',
                                 compact('page_size', 'after', 'before'));
    }
}