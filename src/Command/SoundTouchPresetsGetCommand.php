<?php

namespace TomCan\SoundTouch\Command;


use TomCan\SoundTouch\Response\SoundTouchPresetsGetResponse;

class SoundTouchPresetsGetCommand extends SoundTouchCommand
{



    public function __construct() {

        parent::__construct('GET', 'presets');

    }

    public function createResponse($responseText) {
        return new SoundTouchPresetsGetResponse($responseText);
    }

}