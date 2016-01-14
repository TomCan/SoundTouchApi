<?php

namespace TomCan\SoundTouch\Command;


use TomCan\SoundTouch\Response\SoundTouchNowPlayingResponse;

class SoundTouchNowPlayingCommand extends SoundTouchCommand
{

    public function __construct() {

        parent::__construct('GET', 'now_playing');

    }

    public function createResponse($responseText) {
        return new SoundTouchNowPlayingResponse($responseText);
    }

}