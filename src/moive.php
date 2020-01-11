<?php

namespace graychen\moiveUrl;

use graychen\moiveUrl\singletontrait;
use GuzzleHttp\Client;

class moive
{
  use singletontrait;

  const HOST ="http://www.zuidazy2.net/index.php";

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

   /**
   * 获取电影搜索的html
   */
  public function getSearchHtml($name)
  {
    $name = $this->getName();
    $client = new Client();
    $response = $client->request('POST', self::HOST."?m=vod-search", [
      'form_params' => [
          'wd' => $name,
          'submit' => 'search'
      ]
    ]);
    $body=$response->getBody();
    $content = $body->getContents();
    return $content;
  }
}
