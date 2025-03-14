<?php

use Collect\Collect;
use PHPUnit\Framework\TestCase;

class ExceptTest extends TestCase
{
    public function testExceptSingleKey()
    {
        $collect = new Collect(['a' => 1, 'b' => 2]);
        $this->assertEquals(['b' => 2], $collect->except('a')->toArray());
    }

    public function testExceptMultipleKeys()
    {
        $collect = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $this->assertEquals(['c' => 3], $collect->except(['a', 'b'])->toArray());
    }
}