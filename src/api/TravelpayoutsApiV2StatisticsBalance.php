<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Your balance
 *
 * Returns your current balance.
 *
 * EndpointURL: http://api.travelpayouts.com/v2/statistics/balance
 *
 * URL: http://api.travelpayouts.com/v2/statistics/balance
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiV2StatisticsBalance extends BaseApi
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
        return 'http://api.travelpayouts.com/v2/statistics/balance';
    }
}
