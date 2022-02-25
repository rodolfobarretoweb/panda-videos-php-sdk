<?php
namespace PandaVideosPhpSdk\Utils;

class Error extends \Exception {
  public function __toString() {
    return $this->message;
  }
}
