<?php

namespace TomCan\SoundTouch\Command;


use TomCan\SoundTouch\Response\SoundTouchSourcesGetResponse;

class SoundTouchSourcesGetCommand extends SoundTouchCommand
{



    public function __construct() {

        parent::__construct('GET', 'sources');

    }

    public function createResponse($responseText) {
        return new SoundTouchSourcesGetResponse($responseText);
    }

}