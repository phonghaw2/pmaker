<?php

namespace App\Http\Controllers\Step;

use DateTime;
use Illuminate\Http\Request;

trait StepTrait
{
    public function diffMonth($start, $end):int
    {
        $date_before = new DateTime($start);
        $date_after = new DateTime($end);
        $diff_month = $date_after->diff($date_before);

        return $diff_month->format('%y') * 12 + $diff_month->format('%m');
    }
}
