<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Cheapest tickets
 *
 * Returns the cheapest non-stop tickets, as well as tickets with 1 or 2 stops, for the selected route with filters by departure and return date.
 *
 * EndpointURL: http://api.travelpayouts.com/v1/prices/cheap
 *
 * URL: http://api.travelpayouts.com/v1/prices/cheap?currency=RUB&amp;origin=MOW&amp;destination=HKT&amp;page=1
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiV1PricesCheap extends BaseApi
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
     * Destination. City IATA code
     */
    public $destination = 'HKT';

    /**
     * String.
     * Depart. Date format '%Y-%m-%d' or month format '%Y-%m'
     */
    public $depart_date;

    /**
     * String.
     * Return. Date format '%Y-%m-%d' or month format '%Y-%m'
     */
    public $return_date;

    /**
     * Integer.
     * Page number
     */
    public $page = 1;

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
            3 =>
            array (
              0 => 'depart_date',
            ),
            4 =>
            array (
              0 => 'return_date',
            ),
            5 =>
            array (
              0 => 'page',
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
          'integer' =>
          array (
            0 =>
            array (
              0 => 'page',
            ),
          ),
        ));
    }

    public function getApiUrl()
    {
        return 'http://api.travelpayouts.com/v1/prices/cheap';
    }
}
