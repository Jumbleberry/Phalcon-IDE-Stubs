<?php

namespace Phalcon\Di\FactoryDefault;

use Phalcon\Di\Service;
use Phalcon\Di\FactoryDefault;

/**
 * Phalcon\Di\FactoryDefault\Cli
 *
 * This is a variant of the standard Phalcon\Di. By default it automatically
 * registers all the services provided by the framework.
 * Thanks to this, the developer does not need to register each service individually.
 * This class is specially suitable for CLI applications
 */
class Cli extends FactoryDefault
{

    /**
     * Phalcon\Di\FactoryDefault\Cli constructor
     */
    public function __construct()
    {
    }

}
