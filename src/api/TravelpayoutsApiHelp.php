<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Help
 *
 * Data for the help page. Returns a list of API URLs, a description, and sample query.
 *
 * EndpointURL: http://api.travelpayouts.com/help
 *
 * URL: http://api.travelpayouts.com/help?api_token=YOUR_API_TOKEN&amp;locale=en
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiHelp extends BaseApi
{
    /**
     * String.
     * Your API token.
     */
    public $api_token;

    /**
     * String.
     * Language
     */
    public $locale = 'en';

    public function getRules()
    {
        return array_merge_recursive(parent::getRules(),array (
          'required' =>
          array (
            0 =>
            array (
              0 => 'api_token',
            ),
            1 =>
            array (
              0 => 'locale',
            ),
          ),
          'in' =>
          array (
            0 =>
            array (
              0 => 'locale',
              1 =>
              array (
                0 => 'en',
                1 => 'ru',
              ),
            ),
          ),
        ));
    }

    public function getApiUrl()
    {
        return 'http://api.travelpayouts.com/help';
    }
}
