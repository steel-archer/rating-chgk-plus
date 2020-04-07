<?php

namespace SteelArcher\RatingChgkPlus;

use Symfony\Component\DomCrawler\Crawler;

/**
 * Class Resource
 * @package SteelArcher\RatingChgkPlus
 */
abstract class Resource
{
    private const BASE_URL = 'https://rating.chgk.info/';

    /**
     * @var Crawler
     */
    private $crawler;

    /**
     * @return Crawler
     */
    public function getCrawler(): Crawler
    {
        return $this->crawler;
    }

    /**
     * @param Crawler $crawler
     * @return Resource
     */
    public function setCrawler(Crawler $crawler): Resource
    {
        $this->crawler = $crawler;
        return $this;
    }

    public function __construct()
    {
        $this->crawler = new Crawler();
    }

    /**
     * @param string $route
     * @param array $args
     * @return string
     */
    public function get(string $route, array $args): string
    {
        $url = self::BASE_URL . vsprintf($route, $args);
        $ch  = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}
