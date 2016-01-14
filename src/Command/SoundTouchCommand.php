<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 13/01/2016
 * Time: 23:19
 */

namespace TomCan\SoundTouch\Command;


class SoundTouchCommand
{

    private $method;
    private $path;

    private $payload;
    private $responseText;
    private $responseObject;

    public function __construct($method = 'GET', $path = '') {

        $this->method = $method;
        $this->path = $path;

    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param mixed $payload
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
        return $this;
    }

}