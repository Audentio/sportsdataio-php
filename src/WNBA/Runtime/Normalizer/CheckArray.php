<?php

namespace Sportsdata\API\WNBA\Runtime\Normalizer;

trait CheckArray
{
    public function isOnlyNumericKeys(array $array) : bool
    {
        return count(array_filter($array, function ($key) {
            return is_numeric($key);
        }, ARRAY_FILTER_USE_KEY)) === count($array);
    }
}