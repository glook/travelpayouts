<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Tickets from a city for every day of the month
 *
 * Returns the cheapest non-stop tickets, as well as tickets with 1 or 2 stops, for the selected route for each day of the selected month.
 *
 * EndpointURL: http://api.travelpayouts.com/v1/prices/calendar
 *
 * URL: http://api.travelpayouts.com/v1/prices/calendar?currency=RUB&amp;origin=MOW&amp;destination=LED&amp;calendar_type=departure_date
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiV1PricesCalendar extends BaseApi
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
    public $destination = 'LED';

    /**
     * String.
     * Depart. Month format '%Y-%m'
     */
    public $depart_date;

    /**
     * String.
     * Pay attention! If the return_date is not specified, you will get the One way flights.
     */
    public $return_date;

    /**
     * String.
     * Field for which the calendar is to be built
     */
    public $calendar_type = 'departure_date';

    /**
     * Integer.
     * Trip duration in days
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
              0 => 'calendar_type',
            ),
            6 =>
            array (
              0 => 'trip_duration',
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
          'in' =>
          array (
            0 =>
            array (
              0 => 'calendar_type',
              1 =>
              array (
                0 => 'departure_date',
                1 => 'return_date',
              ),
            ),
          ),
          'integer' =>
          array (
            0 =>
            array (
              0 => 'trip_duration',
            ),
          ),
        ));
    }

    public function getApiUrl()
    {
        return 'http://api.travelpayouts.com/v1/prices/calendar';
    }
}
