<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Latest prices
 *
 * Flights found by our users in the last 48 hours.
 *
 * EndpointURL: http://api.travelpayouts.com/v2/prices/latest
 *
 * URL: http://api.travelpayouts.com/v2/prices/latest?currency=rub&amp;period_type=year&amp;page=1&amp;limit=30&amp;show_to_affiliates=true&amp;sorting=price&amp;trip_class=0
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiV2PricesLatest extends BaseApi
{
    /**
     * String.
     * Currency of prices
     */
    public $currency = 'rub';

    /**
     * String.
     * Origin. City IATA code or country code
     */
    public $origin;

    /**
     * String.
     * Destination. City IATA code or country code
     */
    public $destination;

    /**
     * Date.
     * Start of the period for departure dates.
     */
    public $beginning_of_period;

    /**
     * String.
     * Period date: year - all available, month - one month, season - one season (3 months), day - by days
     */
    public $period_type = 'year';

    /**
     * boolean.
     * true - one way, false - round trip
     */
    public $one_way = false;

    /**
     * Integer.
     * Page number
     */
    public $page = 1;

    /**
     * Integer.
     * Records limit per page
     */
    public $limit = 30;

    /**
     * boolean.
     * false - all prices, true - prices found with affiliate marker (recommended)
     */
    public $show_to_affiliates = true;

    /**
     * String.
     * Sort with the price option to arrange by price, route to arrange by route popularity, or distance_unit_price to arrange by price per kilometer. For city-to-city routes, sorting is by price only.
     */
    public $sorting = 'price';

    /**
     * Integer.
     * Trip class 0 - Economy, 1 - Business, 2 - First
     */
    public $trip_class = 0;

    /**
     * Integer.
     * Trip duration in weeks of days(if period_type=day)
     */
    public $trip_duration;

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
              0 => 'period_type',
            ),
            2 =>
            array (
              0 => 'one_way',
            ),
            3 =>
            array (
              0 => 'page',
            ),
            4 =>
            array (
              0 => 'limit',
            ),
            5 =>
            array (
              0 => 'show_to_affiliates',
            ),
            6 =>
            array (
              0 => 'sorting',
            ),
            7 =>
            array (
              0 => 'trip_class',
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
              1 => 2,
              2 => 3,
            ),
            2 =>
            array (
              0 => 'destination',
              1 => 2,
              2 => 3,
            ),
          ),
          'dateFormat' =>
          array (
            0 =>
            array (
              0 => 'beginning_of_period',
            ),
          ),
          'in' =>
          array (
            0 =>
            array (
              0 => 'period_type',
              1 =>
              array (
                0 => 'day',
                1 => 'year',
                2 => 'month',
                3 => 'season',
              ),
            ),
            1 =>
            array (
              0 => 'sorting',
              1 =>
              array (
                0 => 'price',
                1 => 'route',
                2 => 'distance_unit_price',
              ),
            ),
            2 =>
            array (
              0 => 'trip_class',
              1 =>
              array (
                0 => 0,
                1 => 1,
                2 => 2,
              ),
            ),
          ),
          'boolean' =>
          array (
            0 =>
            array (
              0 => 'one_way',
            ),
            1 =>
            array (
              0 => 'show_to_affiliates',
            ),
          ),
          'integer' =>
          array (
            0 =>
            array (
              0 => 'page',
            ),
            1 =>
            array (
              0 => 'limit',
            ),
            2 =>
            array (
              0 => 'trip_class',
            ),
            3 =>
            array (
              0 => 'trip_duration',
            ),
          ),
        ));
    }

    public function getApiUrl()
    {
        return 'http://api.travelpayouts.com/v2/prices/latest';
    }
}
