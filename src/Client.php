<?php
namespace Jiemo\LeanChat;

use GuzzleHttp\Client as HttpClient;
use Jiemo\LeanChat\Message\Body;
class Client
{
    private $client = null;
    private $url = '';
    public function __construct($url)
    {
        $this->url = $url;
        $this->client = new HttpClient(
            [
                'defaults' => [
                    'exceptions' => false,
                ],
            ]
        );
    }


    public function send(Body $body)
    {
        return $this->client->post($this->url, ['json' => $body->toArray()]);
    }
}
