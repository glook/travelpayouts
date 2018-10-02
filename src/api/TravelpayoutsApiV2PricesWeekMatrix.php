<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Price calendar on week
 *
 * Price calendar. Returns prices for dates closest to the ones specified.
 *
 * EndpointURL: http://api.travelpayouts.com/v2/prices/week-matrix
 *
 * URL: http://api.travelpayouts.com/v2/prices/week-matrix?currency=rub&amp;origin=LED&amp;destination=HKT&amp;show_to_affiliates=true&amp;depart_date=2018-10-17&amp;return_date=2018-10-31
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiV2PricesWeekMatrix extends BaseApi
{
    /**
     * String.
     * Currency of prices
     */
    public $currency = 'rub';

    /**
     * String.
     * Origin. City IATA code
     */
    public $origin = 'LED';

    /**
     * String.
     * Destination. City IATA code
     */
    public $destination = 'HKT';

    /**
     * boolean.
     * false - all prices, true - prices found with affiliate marker (recommended)
     */
    public $show_to_affiliates = true;

    /**
     * Date.
     * Depart date in format '%Y-%m-%d'
     */
    public $depart_date;

    /**
     * Date.
     * Return date in format '%Y-%m-%d'
     */
    public $return_date;

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
              0 => 'show_to_affiliates',
            ),
            4 =>
            array (
              0 => 'depart_date',
            ),
            5 =>
            array (
              0 => 'return_date',
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
              1 => 3,
              2 => 3,
            ),
          ),
          'boolean' =>
          array (
            0 =>
            array (
              0 => 'show_to_affiliates',
            ),
          ),
          'dateFormat' =>
          array (
            0 =>
            array (
              0 => 'depart_date',
              1 => 'Y-m-d',
            ),
            1 =>
            array (
              0 => 'return_date',
              1 => 'Y-m-d',
            ),
          ),
        ));
    }

    public function getApiUrl()
    {
        return 'http://api.travelpayouts.com/v2/prices/week-matrix';
    }
}
