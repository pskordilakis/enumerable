<?php

use PHPUnit\Framework\TestCase;

class ReverseTest extends TestCase
{
    /**
     * @test
     */
    public function reverse()
    {
        $arr = [1, 2, 3];

        $reversed = \Enumerable\Enumerable::reverse($arr);

        $this->assertEquals($reversed, [3, 2, 1]);
    }
}
