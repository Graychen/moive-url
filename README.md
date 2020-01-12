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
``` php
$name="喜剧之王"
$moive=moive::getInstance();
$moive->setName($name);
$url = $moive->getUrlArray();
```
这个$url就是我们所需要的播放资源地址了
