<?php
namespace PandaVideosPhpSdk\Modules;

trait Video {
  use \PandaVideosPhpSdk\Utils\Response;

  public function getVideoById($id) {
    $response = $this->client->request('GET', "/videos/{$id}");
    
    return $this->displayData($response);
  }

  public function downloadVideoThumbnail($videoObject) {
    $response = $this->client->request('GET', $videoObject->thumbnail, ['stream' => true]);
    
    return $this->getFileStream($response);
  }
}
