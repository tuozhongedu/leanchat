# 灵信api客户端

```php
<?php
use Jiemo\LeanChat\Client;
use Jiemo\LeanChat\Message\Attachment;
use Jiemo\LeanChat\Message\Body;

$body = new Body();
$body->title = '@所有人  测试' ;
$body->channel = '#test';
$body->displayUserName = 'test';
$body->displayUserAvatarUrl = 'http://example.com/t.png';
$attachment = new Attachment();
$attachment->color = Attachment::COLOR_WARNING;
$attachment->title = 'test'; 
$attachment->description = 'tset';
$body->addAttachment($attachment);
$client = new Client('http://xxx');
$client->send($body);
```

```php
php bin/leanchat.php
```
