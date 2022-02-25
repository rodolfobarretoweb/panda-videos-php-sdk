<?php
namespace PandaVideosPhpSdk\Modules;

trait Video {
  use \PandaVideosPhpSdk\Utils\Response;

  public function getVideoProperties($video_id) {
    $response = $this->client->request('GET', "/videos/{$video_id}");
    
    return $this->display($response);
  }
}
