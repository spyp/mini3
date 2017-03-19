<?php
/**
 * Created by PhpStorm.
 * User: fara
 * Date: 3/18/2017
 * Time: 6:26 PM
 */

namespace App\Core;


use Philo\Blade\Blade;

class Container
{
    /** @var  Blade */
    public $blade;

    public $controller;

    protected static $container;

    public function __construct()
    {
        $this->blade();
    }

    public static function getInstance()
    {
        if(!isset(self::$container))
            self::$container = new Container();
        return self::$container;
    }

    protected function blade()
    {
        $this->blade = new Blade(ROOT.'templates',ROOT.'cache');
    }
}