<?php

namespace SteelArcher\RatingChgkPlus\Geo;

use SteelArcher\RatingChgkPlus\Resource;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Class Geo
 * @package SteelArcher\RatingChgkPlus\Geo
 */
class Geo extends Resource
{
    /**
     * @return array
     */
    public function getTowns(): array
    {
        $crawler = new Crawler($this->get('geo.php?layout=town_list', []));

        return [];
    }
}
