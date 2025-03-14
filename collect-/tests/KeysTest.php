<?php

use Collect\Collect;
use PHPUnit\Framework\TestCase;

class KeysTest extends TestCase
{
    public function testKeys()
    {
        $collect = new Collect(['a' => 1, 'b' => 2]);
        $this->assertEquals(['a', 'b'], $collect->keys()->toArray());
    }
}