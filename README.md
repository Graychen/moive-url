![PHP Unit](https://github.com/Graychen/moive-url/workflows/PHP%20Unit/badge.svg?branch=master&event=push)
# moive-url
## 作用
一个根据电影名称获取对应的播发资源的composer包
## 怎么引入
``` php
composer require graychen/moive-url
```
## 怎么导入
```php
use graychen\moiveUrl\moive;
```
## 怎么使用
### 获取带播放器的播放页面的地址
``` php
$name="喜剧之王"
$moive=moive::getInstance();
$moive->setName($name);
$url = $moive->getShareUrl();
```
这个$url就是我们可以观看的地址了
### 获取播放的地址
``` php
$name="喜剧之王"
$moive=moive::getInstance();
$moive->setName($name);
$url = $moive->getPlayUrl();
```
这个$url就是可以播放的资源地址
