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
  public function getSearchHtml()
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

  /**
   *获取电影名称详情页url
   */
  public function getDetail()
  {
    $html = $this->getSearchHtml();
    preg_match("/vod-detail-id-[0-9]{3,6}/",$html,$detailUrl);
    return $detailUrl[0];
  }

  /**
   *获取电影url
   */
  public function getUrlArray()
  {
    $detailUrl =  $this->getDetail();
    $client = new Client();
    $response = $client->request('GET', self::HOST."?m=".$detailUrl);
    $body=$response->getBody();
    $content = $body->getContents();
    preg_match("/[a-zA-z]+:\/\/[^\s]*/",$content,$moiveUrlArray);
    return $moiveUrlArray;
  }
}
