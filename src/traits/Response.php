<?php
namespace PandaVideosPhpSdk\Traits;

trait Response {
  public function display($response) {
    return $response->getBody()->getContents();
  }
}
