<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 14/01/2016
 * Time: 0:18
 */

namespace TomCan\SoundTouch\Response;


class SoundTouchZoneGetResponse extends SoundTouchResponse
{

    private $master = "";
    private $members = array();

    public function parseResponse() {

        parent::parseResponse();

        $this->master = (string)$this->getResponseObject()->attributes()->master;
        $i=0;
        while ($this->getResponseObject()->member[$i]) {
            $member = new \stdClass();
            $member->ip = (string)$this->getResponseObject()->member[$i]->attributes()->ipaddress;
            $member->mac = (string)$this->getResponseObject()->member[$i];
            $this->members[] = $member;
            $i++;
        }

    }

    /**
     * @return mixed
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * @return mixed
     */
    public function getMembers()
    {
        return $this->members;
    }

}