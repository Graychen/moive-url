<?php

namespace graychen\moiveUrl;

use graychen\moiveUrl\singletontrait;
use GuzzleHttp\Client;

class moive
{
  use singletontrait;

  const HOST ="http://www.kuyunzy1.com/";

  private $name;

  public function __construct()
  {
  }

  public function setName($name)
  {
    $this->name=$name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getUrl($name)
  {
    $name = $this->getName();
    $client = new Client();
    $response = $client->post(self::HOST."search.asp");
    $body=$response->getBody();
    $content = $body->getContents();
    return $content;
  }
}