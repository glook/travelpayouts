<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Your payments
 *
 * Returns a list of payments made to you.
 *
 * EndpointURL: http://api.travelpayouts.com/v2/statistics/payments
 *
 * URL: http://api.travelpayouts.com/v2/statistics/payments
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiV2StatisticsPayments extends BaseApi
{
    public function getRules()
    {
        return array_merge_recursive(parent::getRules(),array (
        ));
    }

    public function getApiUrl()
    {
        return 'http://api.travelpayouts.com/v2/statistics/payments';
    }
}
