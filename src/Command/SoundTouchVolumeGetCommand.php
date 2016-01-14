<?php

namespace TomCan\SoundTouch\Command;


use TomCan\SoundTouch\Response\SoundTouchVolumeGetResponse;

class SoundTouchVolumeGetCommand extends SoundTouchCommand
{

    public function __construct() {

        parent::__construct('GET', 'volume');

    }

    public function preparePayload() {
        $this->payload = '<name>' . htmlspecialchars($this->name) . '</name>';
        return $this;
    }

    public function createResponse($responseText) {
        return new SoundTouchVolumeGetResponse($responseText);
    }

}