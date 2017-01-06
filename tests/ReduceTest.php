<?php

use PHPUnit\Framework\TestCase;

class ReduceTest extends TestCase
{
    /**
     * @test
     */
    public function sum()
    {
        $arr = [1, 2, 3];

        $sum = \Enumerable\Enumerable::reduce($arr, function ($item, $acc) {
            return $acc + $item;
        }, 0);

        $this->assertEquals($sum, 6);
    }
}
