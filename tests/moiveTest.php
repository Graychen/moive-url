<?php

namespace graychen\moiveUrl\test;

use PHPUnit\Framework\TestCase;
use graychen\moiveUrl\moive;

class moiveTest extends TestCase{

    public function testSetName(){
        $name = "test";
        $moive=moive::getInstance();
        $moive->setName($name);
        $this->assertEquals($moive->getName(),"test");
    }

}