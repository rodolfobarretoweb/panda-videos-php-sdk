<?php
namespace PandaVideosPhpSdk\Utils;

use Error;

trait Response {
  public function display($response) {
    if ($response->getStatusCode() === 200) {
      return json_decode($response->getBody());
    }

    throw new Error(json_decode($response->getBody()));    
  }
}
