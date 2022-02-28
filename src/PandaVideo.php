<?php
namespace PandaVideosPhpSdk;

use GuzzleHttp\Client as GuzzleClient;

class PandaVideo {
  use Modules\Video;

  protected $client;

  public function __construct($params) {
    $this->client = new GuzzleClient([
      'base_uri' => 'https://api-v2.pandavideo.com.br',
      'headers' => [
        'Authorization' => $params['apiKey'],
        'Referer' => $params['referer'],
        'Accept' => 'application/json'
      ]
    ]);
  }
}
