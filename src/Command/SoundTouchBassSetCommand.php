<?php

namespace TomCan\SoundTouch\Command;

use TomCan\SoundTouch\Response\SoundTouchBassSetResponse;

class SoundTouchBassSetCommand extends SoundTouchCommand
{

    private $bass;

    public function __construct() {

        parent::__construct('POST', 'bass');

    }

    public function preparePayload() {
        $this->payload = '<bass>' . intval($this->bass) . '</bass>';
        return $this;
    }

    public function createResponse($responseText) {
        return new SoundTouchBassSetResponse($responseText);
    }

    /**
     * @return mixed
     */
    public function getBass()
    {
        return $this->bass;
    }

    /**
     * @param mixed $volume
     */
    public function setBass($bass)
    {
        $this->volume = $bass;
    }
}