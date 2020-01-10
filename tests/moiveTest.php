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

    public function testGetMoiveUrl(){
        $name = "大话西游";
        $moive=moive::getInstance();
        $response = $moive->getUrl($name);
        var_dump($response);
    }
}