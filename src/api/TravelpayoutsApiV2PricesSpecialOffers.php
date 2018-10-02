<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Special offers
 *
 * Special offers, in XML format. Returns newest special offers.
 *
 * EndpointURL: http://api.travelpayouts.com/v2/prices/special-offers
 *
 * URL: http://api.travelpayouts.com/v2/prices/special-offers
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiV2PricesSpecialOffers extends BaseApi
{
    public function getRules()
    {
        return array_merge_recursive(parent::getRules(),array (
        ));
    }

    public function getApiUrl()
    {
        return 'http://api.travelpayouts.com/v2/prices/special-offers';
    }
}
