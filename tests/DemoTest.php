<?php

namespace Faizel\Esign\Tests;

use Faizel\Esign\Tool;

class DemoTest extends TestCase
{
    public function testHello()
    {
        $str = Tool::Hello();
        self::assertEquals('Hello world',$str);
    }
}