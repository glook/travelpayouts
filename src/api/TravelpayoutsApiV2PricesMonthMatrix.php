<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Prices calendar
 *
 * Prices for each day of the month, grouped by number of stops
 *
 * EndpointURL: http://api.travelpayouts.com/v2/prices/month-matrix
 *
 * URL: http://api.travelpayouts.com/v2/prices/month-matrix?currency=rub&amp;origin=LED&amp;destination=HKT&amp;show_to_affiliates=true&amp;month=2018-11-03
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiV2PricesMonthMatrix extends BaseApi
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
     * First day of month in format "%Y-%m-01"
     */
    public $month;

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
              0 => 'month',
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
              0 => 'month',
              1 => 'Y-m-01',
            ),
          ),
        ));
    }

    public function getApiUrl()
    {
        return 'http://api.travelpayouts.com/v2/prices/month-matrix';
    }
}
