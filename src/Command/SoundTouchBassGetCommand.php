<?php

namespace TomCan\SoundTouch\Command;


use TomCan\SoundTouch\Response\SoundTouchBassGetResponse;

class SoundTouchBassGetCommand extends SoundTouchCommand
{



    public function __construct() {

        parent::__construct('GET', 'bass');

    }

    public function createResponse($responseText) {
        return new SoundTouchBassGetResponse($responseText);
    }

}