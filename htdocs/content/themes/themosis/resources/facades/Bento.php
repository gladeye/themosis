<?php

namespace Theme\Facades;

use Themosis\Facades\Facade;

class Bento extends Facade
{
    /**
     * Return the service provider key responsible for the field class.
     * The key must be the same as the one used when registering
     * the service provider.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bento.manifest';
    }
}
