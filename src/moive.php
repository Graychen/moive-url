<?php

namespace graychen\moiveUrl;

use graychen\moiveUrl\singletontrait;

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
    self::HOST."search.asp";
  }
}