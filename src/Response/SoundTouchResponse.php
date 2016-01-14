<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 14/01/2016
 * Time: 0:15
 */

namespace TomCan\SoundTouch\Response;


class SoundTouchResponse
{

    private $success = false;

    private $responseText;
    private $responseObject;

    public function __construct($responseText) {
        $this->responseText = $responseText;
        $this->parseResponse();
    }

    /**
     * @return boolean
     */
    public function isSuccess()
    {
        return $this->success;
    }

    /**
     * @param boolean $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    /**
     * @return mixed
     */
    public function getResponseText()
    {
        return $this->responseText;
    }

    public function parseResponse() {
        $this->responseObject = new \SimpleXMLElement($this->responseText);
    }

    /**
     * @return mixed
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }


}