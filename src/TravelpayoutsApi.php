<?php

namespace Glook\TravelPayouts;

use Glook\TravelPayouts\Api\TravelpayoutsApiHelp;
use Glook\TravelPayouts\Api\TravelpayoutsApiV1AirlineDirections;
use Glook\TravelPayouts\Api\TravelpayoutsApiV1CityDirections;
use Glook\TravelPayouts\Api\TravelpayoutsApiV1PricesCalendar;
use Glook\TravelPayouts\Api\TravelpayoutsApiV1PricesCheap;
use Glook\TravelPayouts\Api\TravelpayoutsApiV1PricesDirect;
use Glook\TravelPayouts\Api\TravelpayoutsApiV1PricesMonthly;
use Glook\TravelPayouts\Api\TravelpayoutsApiV2PricesHolidaysByRoutes;
use Glook\TravelPayouts\Api\TravelpayoutsApiV2PricesLatest;
use Glook\TravelPayouts\Api\TravelpayoutsApiV2PricesMonthMatrix;
use Glook\TravelPayouts\Api\TravelpayoutsApiV2PricesNearestPlacesMatrix;
use Glook\TravelPayouts\Api\TravelpayoutsApiV2PricesSpecialOffers;
use Glook\TravelPayouts\Api\TravelpayoutsApiV2PricesWeekMatrix;
use Glook\TravelPayouts\Api\TravelpayoutsApiV2StatisticsBalance;
use Glook\TravelPayouts\Api\TravelpayoutsApiV2StatisticsDetailedSales;
use Glook\TravelPayouts\Api\TravelpayoutsApiV2StatisticsPayments;
use Glook\TravelPayouts\Api\TravelpayoutsApiV2StatisticsSales;

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 *
 * This file is auto-generated.
 */
class TravelpayoutsApi
{
    const SKIP_VALUE = -1;

    private static $_instance;

    public static function instance()
    {
        if(null === self::$_instance)
        {
        self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV2PricesLatest
     */
    public function v2PricesLatest($attributes = false)
    {
        return new TravelpayoutsApiV2PricesLatest($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV2PricesMonthMatrix
     */
    public function v2PricesMonthMatrix($attributes = false)
    {
        return new TravelpayoutsApiV2PricesMonthMatrix($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV2PricesNearestPlacesMatrix
     */
    public function v2PricesNearestPlacesMatrix($attributes = false)
    {
        return new TravelpayoutsApiV2PricesNearestPlacesMatrix($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV2PricesSpecialOffers
     */
    public function v2PricesSpecialOffers($attributes = false)
    {
        return new TravelpayoutsApiV2PricesSpecialOffers($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV2PricesWeekMatrix
     */
    public function v2PricesWeekMatrix($attributes = false)
    {
        return new TravelpayoutsApiV2PricesWeekMatrix($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV2PricesHolidaysByRoutes
     */
    public function v2PricesHolidaysByRoutes($attributes = false)
    {
        return new TravelpayoutsApiV2PricesHolidaysByRoutes($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV2StatisticsBalance
     */
    public function v2StatisticsBalance($attributes = false)
    {
        return new TravelpayoutsApiV2StatisticsBalance($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV2StatisticsPayments
     */
    public function v2StatisticsPayments($attributes = false)
    {
        return new TravelpayoutsApiV2StatisticsPayments($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV2StatisticsSales
     */
    public function v2StatisticsSales($attributes = false)
    {
        return new TravelpayoutsApiV2StatisticsSales($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV2StatisticsDetailedSales
     */
    public function v2StatisticsDetailedSales($attributes = false)
    {
        return new TravelpayoutsApiV2StatisticsDetailedSales($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV1PricesCalendar
     */
    public function v1PricesCalendar($attributes = false)
    {
        return new TravelpayoutsApiV1PricesCalendar($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV1PricesCheap
     */
    public function v1PricesCheap($attributes = false)
    {
        return new TravelpayoutsApiV1PricesCheap($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV1PricesDirect
     */
    public function v1PricesDirect($attributes = false)
    {
        return new TravelpayoutsApiV1PricesDirect($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV1PricesMonthly
     */
    public function v1PricesMonthly($attributes = false)
    {
        return new TravelpayoutsApiV1PricesMonthly($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV1AirlineDirections
     */
    public function v1AirlineDirections($attributes = false)
    {
        return new TravelpayoutsApiV1AirlineDirections($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiV1CityDirections
     */
    public function v1CityDirections($attributes = false)
    {
        return new TravelpayoutsApiV1CityDirections($attributes);
    }

    /**
     * @param $attributes
     * @return TravelpayoutsApiHelp
     */
    public function help($attributes = false)
    {
        return new TravelpayoutsApiHelp($attributes);
    }
}
