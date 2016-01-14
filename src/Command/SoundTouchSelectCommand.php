<?php

namespace TomCan\SoundTouch\Command;

use TomCan\SoundTouch\Response\SoundTouchSelectResponse;

class SoundTouchSelectCommand extends SoundTouchCommand
{

    private $source;
    private $sourceAccount;
    private $location;
    private $name;

    public function __construct() {

        parent::__construct('POST', 'select');

    }

    public function preparePayload() {
        $this->payload = '<ContentItem source="'.$this->source.'" sourceAccount="'.$this->sourceAccount.'" location="'.$this->location.'"><itemName>'.$this->name.'</itemName></ContentItem>';
        return $this;
    }

    public function createResponse($responseText) {
        return new SoundTouchSelectResponse($responseText);
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getSourceAccount()
    {
        return $this->sourceAccount;
    }

    /**
     * @param mixed $sourceAccount
     */
    public function setSourceAccount($sourceAccount)
    {
        $this->sourceAccount = $sourceAccount;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
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