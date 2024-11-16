<?php

namespace Faizel\Esign\Tests;

use Faizel\Esign\Tool;

class DemoTest extends TestCase
{
    public function testHello()
    {
        $str = Tool::hello();
        self::assertEquals('hello',$str);
    }

    public function testWorld()
    {
        $str = Tool::world();
        self::assertEquals('world',$str);
    }
}