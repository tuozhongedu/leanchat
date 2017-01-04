#!/usr/bin/env php
<?php

$loader = require __DIR__ . '/../vendor/autoload.php';

use Jiemo\LeanChat\Message\Attachment;
use Jiemo\LeanChat\Message\Body;
use Jiemo\LeanChat\Client;


$body = new Body();


$body->title = 'test';
$body->channel = '#test';
$body->displayUserName = 'test_bot';
$body->displayUserAvatarUrl = 'https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/logo_white.png';

$attachment = new Attachment();
$attachment->color = Attachment::COLOR_SUCCESS;
$attachment->title = 'it is a test';
$attachment->description = 'Test description';
$attachment->url = 'https://www.baidu.com';


$body->addAttachment($attachment);


$client = new Client('https://hooks.pubu.im/services/xxx');

$return = $client->send($body);

print_r(json_decode($return->getBody(), true));