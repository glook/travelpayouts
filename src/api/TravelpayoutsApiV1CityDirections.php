<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Popular routes from city
 *
 * Returns most popular routes for selected origin
 *
 * EndpointURL: http://api.travelpayouts.com/v1/city-directions
 *
 * URL: http://api.travelpayouts.com/v1/city-directions?origin=MOW&amp;currency=RUB
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiV1CityDirections extends BaseApi
{
    /**
     * String.
     * Origin. City IATA code
     */
    public $origin = 'MOW';

    /**
     * String.
     * Currency of prices
     */
    public $currency = 'RUB';

    public function getRules()
    {
        return array_merge_recursive(parent::getRules(),array (
          'required' =>
          array (
            0 =>
            array (
              0 => 'origin',
            ),
            1 =>
            array (
              0 => 'currency',
            ),
          ),
          'lengthBetween' =>
          array (
            0 =>
            array (
              0 => 'origin',
              1 => 3,
              2 => 3,
            ),
            1 =>
            array (
              0 => 'currency',
              1 => 3,
              2 => 3,
            ),
          ),
        ));
    }

    public function getApiUrl()
    {
        return 'http://api.travelpayouts.com/v1/city-directions';
    }
}
