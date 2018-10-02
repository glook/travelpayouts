<?php

namespace Glook\TravelPayouts\Api;

use Glook\TravelPayouts\TravelpayoutsApiBase as BaseApi;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * Your stats
 *
 * Returns your number of searches/clicks/reservations and corresponding earnings, grouped by a parameter. Monthly data for hotels and for plane tickets. Data can be filtered by host and/or marker.
 *
 * EndpointURL: http://api.travelpayouts.com/v2/statistics/sales
 *
 * URL: http://api.travelpayouts.com/v2/statistics/sales?currency=rub&amp;group_by=date&amp;month=2018-10-03&amp;host_filter=null&amp;marker_filter=null
 *
 * This file is auto-generated.
 */
class TravelpayoutsApiV2StatisticsSales extends BaseApi
{
    /**
     * String.
     * Currency of prices
     */
    public $currency = 'rub';

    /**
     * String.
     * Value to use for grouping. Use date, host, or marker to sort by the respective parameter.
     */
    public $group_by = 'date';

    /**
     * Date.
     * First day of month in format "%Y-%m-01"
     */
    public $month;

    /**
     * String.
     * ???
     */
    public $host_filter;

    /**
     * String.
     * ???
     */
    public $marker_filter;

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
              0 => 'group_by',
            ),
            2 =>
            array (
              0 => 'month',
            ),
            3 =>
            array (
              0 => 'host_filter',
            ),
            4 =>
            array (
              0 => 'marker_filter',
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
          'in' =>
          array (
            0 =>
            array (
              0 => 'group_by',
              1 =>
              array (
                0 => 'date',
                1 => 'host',
                2 => 'marker',
              ),
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
        return 'http://api.travelpayouts.com/v2/statistics/sales';
    }
}
