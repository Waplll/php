<?php

use Collect\Collect;
use PHPUnit\Framework\TestCase;

class ValuesTest extends TestCase
{
    public function testValues()
    {
        $collect = new Collect(['a' => 1, 'b' => 2]);
        $this->assertEquals([1, 2], $collect->values()->toArray());
    }
}