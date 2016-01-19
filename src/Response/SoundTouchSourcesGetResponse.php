<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 14/01/2016
 * Time: 0:18
 */

namespace TomCan\SoundTouch\Response;


class SoundTouchSourcesGetResponse extends SoundTouchResponse
{

    private $deviceID;
    private $sources;

    public function parseResponse() {

        parent::parseResponse();

        $this->sources = array();
        $this->deviceID = (string)$this->getResponseObject()->attributes()->deviceID;

        foreach ($this->getResponseObject()->sourceItem as $sourceItem) {

            $item = new \stdClass();
            $item->source = (string)$sourceItem->attributes()->source;
            $item->name = (string)$sourceItem;
            if ($item->name == "") $item->name = $item->source;
            $item->sourceAccount = (string)$sourceItem->attributes()->sourceAccount;
            $item->status = (string)$sourceItem->attributes()->status;
            if ((string)$sourceItem->attributes()->isLocal == "true") {
                $item->isLocal = true;
            } else {
                $item->isLocal = false;
            }

            $this->sources[] = $item;

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
     * @return mixed
     */
    public function getSources()
    {
        return $this->sources;
    }

}