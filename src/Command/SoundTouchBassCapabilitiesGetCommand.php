<?php

namespace TomCan\SoundTouch\Command;


use TomCan\SoundTouch\Response\SoundTouchBassCapabilitiesGetResponse;

class SoundTouchBassCapabilitiesGetCommand extends SoundTouchCommand
{



    public function __construct() {

        parent::__construct('GET', 'bassCapabilities');

    }

    public function createResponse($responseText) {
        return new SoundTouchBassCapabilitiesGetResponse($responseText);
    }

}