<?php
namespace PandaVideosPhpSdk\Modules;

trait Video {
  use \PandaVideosPhpSdk\Utils\Response;

  public function getVideoById($id) {
    $response = $this->client->request('GET', "/videos/{$id}");
    
    return $this->display($response);
  }

  public function getVideoResourceFromUrl($url) {
    return $this->client->request('GET', $url);
  }
}
