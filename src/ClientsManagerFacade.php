<?php

namespace Binomedev\ClientsManager;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Binomedev\ClientsManager\ClientsManager
 */
class ClientsManagerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'showcase-clients';
    }
}
