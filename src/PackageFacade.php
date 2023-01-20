<?php

namespace Dminustin\LSNE\RatingPackage;

use Illuminate\Support\Facades\Facade;

class PackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Package::PACKAGE_NAME;
    }
}
