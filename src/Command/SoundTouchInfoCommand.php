<?php

namespace TomCan\SoundTouch\Command;


use TomCan\SoundTouch\Response\SoundTouchInfoResponse;

class SoundTouchInfoCommand extends SoundTouchCommand
{



    public function __construct() {

        parent::__construct('GET', 'info');

    }

    public function createResponse($responseText) {
        return new SoundTouchInfoResponse($responseText);
    }

}