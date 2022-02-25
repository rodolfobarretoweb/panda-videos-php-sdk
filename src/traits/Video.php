<?php
namespace PandaVideosPhpSdk\Traits;

trait Video {
  use Response;

  public function getVideoProperties($video_id) {
    $response = $this->client->request('GET', "/videos/{$video_id}");
    return $this->display($response);
  }
}
