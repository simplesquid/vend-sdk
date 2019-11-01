<?php

namespace SimpleSquid\Vend\Resources;

trait CastsCollection
{
    public function __construct(array $data = [])
    {
        $resource = substr(get_class($this), 0, -10);

        $collection = [];

        foreach ($data as $item) {
            $collection[] = new $resource($item);
        }

        parent::__construct($collection);
    }
}
