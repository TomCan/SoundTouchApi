<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 14/01/2016
 * Time: 0:18
 */

namespace TomCan\SoundTouch\Response;


class SoundTouchPresetsGetResponse extends SoundTouchResponse
{

    private $deviceID;
    private $presets;

    public function parseResponse() {

        parent::parseResponse();

        $this->presets = array();

        foreach ($this->getResponseObject()->preset as $preset) {

            $item = new \stdClass();
            $item->source = (string)$preset->ContentItem->attributes()->source;
            $item->location = (string)$preset->ContentItem->attributes()->location;
            $item->sourceAccount = (string)$preset->ContentItem->attributes()->sourceAccount;
            if ((string)$preset->ContentItem->attributes()->isPresetable == "true") {
                $item->isPresetable = true;
            } else {
                $item->isPresetable = false;
            }
            $item->name = (string)$preset->ContentItem->itemName;


            $this->presets[(int)$preset->attributes()->id] = $item;

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
    public function getPresets()
    {
        return $this->presets;
    }

}