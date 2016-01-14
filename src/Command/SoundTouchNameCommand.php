<?php

namespace TomCan\SoundTouch\Command;


use TomCan\SoundTouch\Response\SoundTouchNameResponse;

class SoundTouchNameCommand extends SoundTouchCommand
{

    private $name;

    public function __construct() {

        parent::__construct('POST', 'name');

    }

    public function preparePayload() {
        $this->payload = '<name>' . htmlspecialchars($this->name) . '</name>';
        return $this;
    }

    public function createResponse($responseText) {
        return new SoundTouchNameResponse($responseText);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}