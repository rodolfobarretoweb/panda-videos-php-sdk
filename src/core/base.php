<?php
namespace PandaVideosPhpSdk\Core;

use GuzzleHttp\Client as GuzzleClient;

class Base {
  protected $client;

  public function __construct($apiKey) {
    $this->client = new GuzzleClient([
      'base_uri' => 'https://api-v2.pandavideo.com.br',
      'headers' => [
        'Authorization' => $apiKey,
        'Accept' => 'application/json'
      ]
    ]);
  }
}
