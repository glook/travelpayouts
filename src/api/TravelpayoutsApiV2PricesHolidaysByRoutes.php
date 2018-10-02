<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Cheap flights for holidays
 *
 * The best offers on holidays from popular cities
 *
 * EndpointURL: http://api.travelpayouts.com/v2/prices/holidays-by-routes
 *
 * URL: http://api.travelpayouts.com/v2/prices/holidays-by-routes
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiV2PricesHolidaysByRoutes extends BaseApi
{
    /**
     * String.
     * Currency of prices
     */
    public $currency = 'rub';

    public function getRules()
    {
        return array_merge_recursive(parent::getRules(),array (
          'required' =>
          array (
            0 =>
            array (
              0 => 'currency',
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
          ),
        ));
    }

    public function getApiUrl()
    {
        return 'http://api.travelpayouts.com/v2/prices/holidays-by-routes';
    }
}
