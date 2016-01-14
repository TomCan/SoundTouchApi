<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 14/01/2016
 * Time: 0:18
 */

namespace TomCan\SoundTouch\Response;


class SoundTouchNowPlayingResponse extends SoundTouchResponse
{

    private $deviceID;
    private $source;

    private $track;
    private $album;
    private $stationName;
    private $playStatus;
    private $description;
    private $stationLocation;
    private $art;
    private $artImageStatus;

    private $contentItem;

    public function parseResponse() {

        parent::parseResponse();

        $this->deviceID = (string)$this->getResponseObject()->attributes()->deviceID;
        $this->source = (string)$this->getResponseObject()->attributes()->source;

        $this->contentItem = new \stdClass();
        if ($this->getResponseObject()->ContentItem) {
            $this->contentItem->source = (string)$this->getResponseObject()->ContentItem->attributes()->source;
            $this->contentItem->location = (string)$this->getResponseObject()->ContentItem->attributes()->location;
            $this->contentItem->sourceAccount = (string)$this->getResponseObject()->ContentItem->attributes()->sourceAccount;
            $this->contentItem->isPresetable = (string)$this->getResponseObject()->ContentItem->attributes()->isPresetable;
            $this->contentItem->name = (string)$this->getResponseObject()->ContentItem->itemName;
        }

        $this->track = (string)$this->getResponseObject()->track;
        $this->album = (string)$this->getResponseObject()->album;
        $this->stationName = (string)$this->getResponseObject()->stationName;
        $this->stationLocation = (string)$this->getResponseObject()->stationLocation;
        $this->playStatus = (string)$this->getResponseObject()->playStatus;
        $this->description = (string)$this->getResponseObject()->description;

        if ($this->getResponseObject()->art) {
            $this->art = (string)$this->getResponseObject()->art;
            $this->artImageStatus = (string)$this->getResponseObject()->art->attributes()->artImageStatus;
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
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @return mixed
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @return mixed
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @return mixed
     */
    public function getStationName()
    {
        return $this->stationName;
    }

    /**
     * @return mixed
     */
    public function getPlayStatus()
    {
        return $this->playStatus;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getStationLocation()
    {
        return $this->stationLocation;
    }

    /**
     * @return mixed
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * @return mixed
     */
    public function getArtImageStatus()
    {
        return $this->artImageStatus;
    }

    /**
     * @return mixed
     */
    public function getContentItem()
    {
        return $this->contentItem;
    }

}