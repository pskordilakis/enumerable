<?php

use PHPUnit\Framework\TestCase;

class FilterTest extends TestCase
{
    /**
     * @test
     */
    public function evens()
    {
        $arr = range(0, 9);

        $evens = \Enumerable\Enumerable::filter($arr, function ($item) {
            return $item % 2 != 0;
        }, 0);

        $this->assertEquals($evens, range(1, 9, 2));
    }
}
