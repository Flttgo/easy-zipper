<?php

namespace Zipper\Facades;

use Illuminate\Support\Facades\Facade;

class EasyZipperFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'easy-zipper';
    }
}
