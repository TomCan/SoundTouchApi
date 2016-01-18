<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 14/01/2016
 * Time: 0:18
 */

namespace TomCan\SoundTouch\Response;


class SoundTouchBassCapabilitiesGetResponse extends SoundTouchResponse
{

    private $deviceID;

    private $available;
    private $min;
    private $max;
    private $default;

    public function parseResponse() {

        parent::parseResponse();

        $this->deviceID = (string)$this->getResponseObject()->attributes()->deviceID;

        if ((string)$this->getResponseObject()->bassAvailable == "true") {
            $this->available = true;
        } else {
            $this->available = false;
        }

        $this->min = (int)$this->getResponseObject()->bassMin;
        $this->max = (int)$this->getResponseObject()->bassMax;
        $this->default = (int)$this->getResponseObject()->bassDefault;

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