<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Popular airline routes
 *
 * Returns the routes that an airline flies and sorts them by popularity.
 *
 * EndpointURL: http://api.travelpayouts.com/v1/airline-directions
 *
 * URL: http://api.travelpayouts.com/v1/airline-directions?airline_code=SU&amp;limit=100
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiV1AirlineDirections extends BaseApi
{
    /**
     * String.
     * Airline code
     */
    public $airline_code = 'SU';

    /**
     * Integer.
     * Records limit per page
     */
    public $limit = 100;

    public function getRules()
    {
        return array_merge_recursive(parent::getRules(),array (
          'required' =>
          array (
            0 =>
            array (
              0 => 'airline_code',
            ),
            1 =>
            array (
              0 => 'limit',
            ),
          ),
          'lengthBetween' =>
          array (
            0 =>
            array (
              0 => 'airline_code',
              1 => 2,
              2 => 2,
            ),
          ),
          'integer' =>
          array (
            0 =>
            array (
              0 => 'limit',
            ),
          ),
        ));
    }

    public function getApiUrl()
    {
        return 'http://api.travelpayouts.com/v1/airline-directions';
    }
}
