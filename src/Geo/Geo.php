<?php

namespace SteelArcher\RatingChgkPlus\Geo;

use SteelArcher\RatingChgkPlus\Resource;

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
        $result = [];
        $rawCsv = trim($this->get('geo.php?layout=town_list&download_data=export_towns', []));
        $csvArr = explode("\n", $rawCsv);
        unset($csvArr[0]);
        foreach ($csvArr as $csvLine) {
            $data = str_getcsv($csvLine, ',', '"');
            $result[$data[1]] = [
                'id'       => $data[0],
                'region'   => $data[2],
                'country'  => $data[3],
                'timezone' => $data[4],
            ];
        }
        ksort($result);

        return $result;
    }
}
