<?php
namespace PandaVideosPhpSdk\Utils;

trait Response {
  public function display($response) {
    if ($response->getStatusCode() === 200) {
      return json_decode($response->getBody());
    }

    throw new \Exception($response);    
  }
}
