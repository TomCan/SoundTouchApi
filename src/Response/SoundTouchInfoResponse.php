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

}