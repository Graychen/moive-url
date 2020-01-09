<?php
namespace graychen\moive;
use graychen\moive\singletontrait;
class moive
{
  const HOST ="http://www.kuyunzy1.com/";
  private $name;

  use singletontrait;
    
  public function __construct($name)
  {
      $this->setName($name);
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
    getContent(self::HOST."search.asp");
  }

}