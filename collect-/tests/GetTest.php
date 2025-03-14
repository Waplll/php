<?php

use Collect\Collect;
use PHPUnit\Framework\TestCase;

class GetTest extends TestCase
{
    public function testGetSingleKey()
    {
        $collect = new Collect(['a' => 1, 'b' => 2]);
        $this->assertEquals(1, $collect->get('a'));
    }

    public function testGetAll()
    {
        $collect = new Collect(['a' => 1, 'b' => 2]);
        $this->assertEquals(['a' => 1, 'b' => 2], $collect->get());
    }
}