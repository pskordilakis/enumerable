<?php

use PHPUnit\Framework\TestCase;

class MapTest extends TestCase
{
    /**
     * @test
     */
    public function double()
    {
        $arr = [1, 2, 3];

        $double = \Enumerable\Enumerable::map($arr, function ($item) {
            return $item * 2;
        }, 0);

        $this->assertEquals($double, [2, 4, 6]);
    }
}
