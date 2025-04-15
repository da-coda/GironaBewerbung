<?php

declare(strict_types=1);

namespace Utils;

class CollectionUtils {

    /**
     * @param \stdClass[] $array
     * @param mixed $key
     * @return array
     */
    public static function asMap(array $array, mixed $key): array
    {
        $out = [];
        foreach ($array as $item) {
            if(!property_exists($item, $key)) {
                throw new \RuntimeException("Property '$key' does not exist");
            }
            $out[$item->{$key}] = $item;
        }
        return $out;
    }

}