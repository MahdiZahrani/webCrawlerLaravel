<?php

namespace App;

use Goutte\Client;
use http\Message;

class CustomCrawler
{
    protected $client ;
    protected $response;

    public function __construct($url,$method = 'GET')
    {
        $this->client = new Client();
        $this->response = $this->client->request($method,$url);
    }

    public function getImage($altAttribute,$srcAttribute = "src")
    {
        $image = $this->response->selectImage($altAttribute)->image();
        return $image->getNode()->getAttribute($srcAttribute);
    }

    public function getCustomTagWithClass($className)
    {
        return $this->response->filter($className)->text();
    }



}
