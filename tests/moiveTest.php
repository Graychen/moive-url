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
        $name = "大话西游之月光宝盒";
        $moive=moive::getInstance();
        $moive->setName($name);
        $response = $moive->getSearchHtml();
        $this->assertTrue($response!=strip_tags($response));
    }

    public function testGetDetail(){
        $name = "大话西游之月光宝盒";
        $moive=moive::getInstance();
        $moive->setName($name);
        $detailUrl = $moive->getDetail();
        $this->assertEquals($detailUrl, "vod-detail-id-6805");
    }

    public function testGetUrlArray()
    {
        $name = "喜剧之王";
        $moive=moive::getInstance();
        $moive->setName($name);
        $detailUrl = $moive->getUrlArray();
        $this->assertEquals(1,preg_match("/http:\/\/[^\s]*\/share\/[a-zA-Z0-9]{15,20}/",$detailUrl));
    }
}
