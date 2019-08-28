<?php

namespace SimpleSquid\Vend\Resources;

use Carbon\Carbon;
use Exception;
use ReflectionClass;

trait CastsDates
{
    public function __construct(array $parameters)
    {
        /** @var \SimpleSquid\Vend\Resources\TwoDotZero\Property[] $properties */
        $properties = $this->getPublicProperties(new ReflectionClass(static::class));

        foreach ($properties as $property) {
            if (in_array('\Carbon\Carbon', $property->getTypes()) && isset($parameters[$key = $property->getName()])) {
                try {
                    $parameters[$key] = is_null($parameters[$key]) ? null : new Carbon($parameters[$key]);
                } catch (Exception $e) {
                }
            }
        }

        parent::__construct($parameters);
    }

    public function toArray(): array
    {
        $array = parent::toArray();

        /** @var \SimpleSquid\Vend\Resources\TwoDotZero\Property[] $properties */
        $properties = $this->getPublicProperties(new ReflectionClass(static::class));

        foreach ($properties as $property) {
            if (in_array('\Carbon\Carbon', $property->getTypes()) && isset($parameters[$key = $property->getName()])) {
                $array[$key] = $array[$key] instanceof Carbon ? (string) $array[$key] : $array[$key];
            }
        }

        return $array;
    }
}