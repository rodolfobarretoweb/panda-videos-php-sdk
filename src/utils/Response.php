<?php
namespace PandaVideosPhpSdk\Utils;

trait Response {
  public function displayData($response) {
    if ($response->getStatusCode() === 200) {
      return json_decode($response->getBody());
    }

    throw new \Exception($response);
  }

  public function getFileStream($response) {
    if ($response->getStatusCode() === 200) {
      return $response->getBody()->getContents();
    }

    throw new \Exception($response);
  }
}
