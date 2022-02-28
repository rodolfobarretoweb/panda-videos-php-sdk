<?php
namespace PandaVideosPhpSdk\Modules;

trait Video {
  use \PandaVideosPhpSdk\Utils\Response;

  public function getVideoById($id) {
    $response = $this->client->request('GET', "/videos/{$id}");
    
    return $this->displayData($response);
  }

  public function getVideoResourceFromUrl($url) {
    $response = $this->client->request('GET', $url, ['stream' => true]);
    
    return $this->getFileStream($response);
  }
}
