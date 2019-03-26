<?php

namespace SWHAppDev\login\Facades;

use Illuminate\Support\Facades\Facade;

class login extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'login';
    }
}
