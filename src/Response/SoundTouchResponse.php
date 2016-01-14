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

    private $status;
    private $errors;

    private $responseText;
    private $responseObject;

    public function __construct($responseText) {

        if ($responseText == "") {
            $this->success = false;
        } else {
            $this->success = true;
            $this->responseText = $responseText;
            $this->parseResponse();
        }
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

        // check status
        if ($this->responseObject->status) $this->status = (string)$this->responseObject->status;

        if ($this->responseObject->errors) {
            foreach ($this->responseObject->errors as $error) {
                $this->errors[] = array(
                    "value" => (string)$error->attributes()->value,
                    "name" => (string)$error->attributes()->name,
                    "severity" => (string)$error->attributes()->severity,
                    "content" => (string)$error,
                );
            }
        }

    }

    /**
     * @return mixed
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }

}