<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 14/01/2016
 * Time: 0:18
 */

namespace TomCan\SoundTouch\Response;


class SoundTouchVolumeGetResponse extends SoundTouchResponse
{

    private $deviceID;
    private $target;
    private $actual;
    private $muted;

    public function parseResponse() {

        parent::parseResponse();

        $this->deviceID = (string)$this->getResponseObject()->attributes()->deviceID;
        $this->target = (int)$this->getResponseObject()->targetvolume;
        $this->actual = (int)$this->getResponseObject()->actualvolume;
        if ((string)$this->getResponseObject()->muteenabled == "true") {
            $this->muted = true;
        } else {
            $this->muted = false;
        }

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

    /**
     * @return boolean
     */
    public function getMuted()
    {
        return $this->muted;
    }

}