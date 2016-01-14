<?php

namespace TomCan\SoundTouch\Command;

use TomCan\SoundTouch\Response\SoundTouchVolumeSetResponse;

class SoundTouchVolumeSetCommand extends SoundTouchCommand
{

    private $volume;

    public function __construct() {

        parent::__construct('POST', 'volume');

    }

    public function preparePayload() {
        $this->payload = '<volume>' . intval($this->volume) . '</volume>';
        return $this;
    }

    public function createResponse($responseText) {
        return new SoundTouchVolumeSetResponse($responseText);
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param mixed $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }
}