<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Cheapest tichets grouped by month
 *
 *
 *
 * EndpointURL: http://api.travelpayouts.com/v1/prices/monthly
 *
 * URL: http://api.travelpayouts.com/v1/prices/monthly?currency=RUB&amp;origin=MOW&amp;destination=HKT
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiV1PricesMonthly extends BaseApi
{
    /**
     * String.
     * Currency of prices
     */
    public $currency = 'RUB';

    /**
     * String.
     * Origin. City IATA code
     */
    public $origin = 'MOW';

    /**
     * String.
     * Destination. City IATA code or country code
     */
    public $destination = 'HKT';

    public function getRules()
    {
        return array_merge_recursive(parent::getRules(),array (
          'required' =>
          array (
            0 =>
            array (
              0 => 'currency',
            ),
            1 =>
            array (
              0 => 'origin',
            ),
            2 =>
            array (
              0 => 'destination',
            ),
          ),
          'lengthBetween' =>
          array (
            0 =>
            array (
              0 => 'currency',
              1 => 3,
              2 => 3,
            ),
            1 =>
            array (
              0 => 'origin',
              1 => 3,
              2 => 3,
            ),
            2 =>
            array (
              0 => 'destination',
              1 => 1,
              2 => 3,
            ),
          ),
        ));
    }

    public function getApiUrl()
    {
        return 'http://api.travelpayouts.com/v1/prices/monthly';
    }
}
