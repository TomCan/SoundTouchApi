<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 14/01/2016
 * Time: 0:18
 */

namespace TomCan\SoundTouch\Response;


class SoundTouchBassGetResponse extends SoundTouchResponse
{

    private $deviceID;
    private $target;
    private $actual;

    public function parseResponse() {

        parent::parseResponse();

        $this->deviceID = (string)$this->getResponseObject()->attributes()->deviceID;
        $this->target = (int)$this->getResponseObject()->targetbass;
        $this->actual = (int)$this->getResponseObject()->actualbass;

    }

    /**
     * @return mixed
     */
    public function getDeviceID()
    {
        return $this->deviceID;
    }

    /**
     * @return int
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @return int
     */
    public function getActual()
    {
        return $this->actual;
    }

}