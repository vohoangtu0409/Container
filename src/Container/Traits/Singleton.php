<?php
namespace Tuezy\Container\Traits;

use Tuezy\Container\Container;

trait Singleton{
    protected static $instance;

    protected static $withoutBootstrap = true;

    public static function getInstance() : Container
    {
        if (is_null(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    public static function setInstance($instance)
    {
        if(self::$withoutBootstrap){
            self::$instance = $instance;
        }
    }
}