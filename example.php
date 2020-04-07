<?php

require __DIR__ . '/vendor/autoload.php';

$api = new \SteelArcher\RatingChgkPlus\Api();
$geo = $api->getGeo();
$towns = $geo->getTowns();
