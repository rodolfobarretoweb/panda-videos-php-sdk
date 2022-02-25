<?php
namespace PandaVideosPhpSdk;

trait Video {
  public function getVideoProperties($video_id) {
    return $this->client->request('GET', "/videos/{$video_id}");
  }
}
