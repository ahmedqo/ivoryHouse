<?php

namespace App\Functions;

use Carbon\Carbon;
use Carbon\CarbonPeriod;

class DateFunction
{
    public static function period($startDate, $endDate)
    {
        $startDate = Carbon::parse($startDate);
        $endDate = Carbon::parse($endDate);

        $period = CarbonPeriod::create($startDate, $endDate);

        $dates = [];

        foreach ($period as $date) {
            $dates[] = $date->toDateString();
        }
        return $dates;
    }
}
