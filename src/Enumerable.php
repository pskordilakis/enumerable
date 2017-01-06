<?php

namespace Enumerable;

class Enumerable
{
    public static function reduce($T, \Closure $fun, $acc = null)
    {
        $acc = $acc ?? $T[1];

        foreach ($T as $item) {
            $acc = $fun($item, $acc);
        }

        return $acc;
    }

    public static function map($T, \Closure $fun)
    {
        return self::reduce($T, function ($item, $acc) use ($fun) {
            $acc[] = $fun($item);
            return $acc;
        }, []);
    }

    public static function filter($T, \Closure $fun)
    {
        return self::reduce($T, function ($item, $acc) use ($fun) {
            if ($fun($item)) {
                $acc[] = $item;
            }
            return $acc;
        }, []);
    }
}
