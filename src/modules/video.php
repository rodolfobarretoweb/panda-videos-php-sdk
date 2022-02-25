<?php
namespace PandaVideosPhpSdk\Modules;

use PandaVideosPhpSdk\Core\Base;

class Video extends Base {
  public function getVideoProperties($video_id) {
    $response = $this->client->request('GET', "/videos/{$video_id}");
    var_dump($response);
  }
}
