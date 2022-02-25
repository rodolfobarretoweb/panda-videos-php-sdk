<?php
require_once('src/modules/video.php');

use PandaVideosPhpSdk\Modules\Video;

$video = new Video('');
$video->getVideoProperties('vimeo-680570408');
