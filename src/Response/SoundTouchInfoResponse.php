<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 14/01/2016
 * Time: 0:18
 */

namespace TomCan\SoundTouch\Response;


class SoundTouchInfoResponse extends SoundTouchResponse
{

    private $deviceID;
    private $name;
    private $type;
    private $account;
    private $ipAddress;
    private $macAddress;

    public function parseResponse() {

        parent::parseResponse();

        $this->deviceID = (string)$this->getResponseObject()->attributes()->deviceID;
        $this->name = (string)$this->getResponseObject()->name;
        $this->type = (string)$this->getResponseObject()->type;
        $this->account = (string)$this->getResponseObject()->margeAccountUUID;
        $this->ipAddress = (string)$this->getResponseObject()->networkInfo->ipAddress;
        $this->macAddress = (string)$this->getResponseObject()->networkInfo->macAddress;


    }

    /**
     * @return mixed
     */
    public function getDeviceID()
    {
        return $this->deviceID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return mixed
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @return mixed
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }

}