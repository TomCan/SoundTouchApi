<?php

namespace TomCan\SoundTouch\Command;

use TomCan\SoundTouch\Response\SoundTouchKeyResponse;

class SoundTouchKeyCommand extends SoundTouchCommand
{

    private $value;
    private $state;

    public function __construct() {

        parent::__construct('POST', 'key');

    }

    public function preparePayload() {
        $this->payload = '<key state="'.$this->state.'" sender="Gabbo">' . $this->value . '</key>';
        return $this;
    }

    public function createResponse($responseText) {
        return new SoundTouchKeyResponse($responseText);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

}