<?php

namespace App\Helpers;

use App\Models\Service;

class helper
{
    /**
     *
     *
     * @return \Illuminate\Support\Collection
     */
    public static function servicesFooterCenter()
    {
        $servicesFooterCenter = Service::select('id', 'title')->get();

        return $servicesFooterCenter;
    }
}
