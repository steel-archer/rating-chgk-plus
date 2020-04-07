<?php

namespace SteelArcher\RatingChgkPlus;

/**
 * Class Api
 * @package SteelArcher\RatingChgkPlus
 */
class Api
{
    /**
     * @var Geo\Geo
     */
    private $geo;

    /**
     * @return Geo\Geo
     */
    public function getGeo(): Geo\Geo
    {
        return $this->geo;
    }

    /**
     * @param Geo\Geo $geo
     * @return Api
     */
    public function setGeo(Geo\Geo $geo): Api
    {
        $this->geo = $geo;
        return $this;
    }

    /**
     * Api constructor.
     */
    public function __construct()
    {
        $this->geo = new Geo\Geo();
    }
}
