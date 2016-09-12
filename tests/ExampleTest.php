<?php

use PHPUnit\Framework\TestCase;
use Greenbicycle\TestComposerPackage\Foo;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testFoo()
    {
        $a = new Foo();
        
        $this->assertTrue(is_object($a));
        
    }
}
