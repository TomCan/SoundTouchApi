<?php

namespace TomCan\SoundTouch\Command;


use TomCan\SoundTouch\Response\SoundTouchZoneGetResponse;

class SoundTouchZoneGetCommand extends SoundTouchCommand
{



    public function __construct() {

        parent::__construct('GET', 'getZone');

    }

    public function createResponse($responseText) {
        return new SoundTouchZoneGetResponse($responseText);
    }

}