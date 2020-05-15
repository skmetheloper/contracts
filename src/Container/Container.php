<?php

namespace Ethereal\Contracts\Container;

use Ethereal\Contracts\Foundation\Application;

interface Container
{
    /**
     * 
     * @param  string $name
     * @return bool
     */
    public function has($name);

    /**
     * 
     * @param  string $name
     * @return mixed
     * @throws \OutOfBoundsException
     */
    public function get($name);

    /**
     * 
     * @param  string           $accessor
     * @param  string|\Closure  $concrete
     * @return void
     */
    public function bind($accessor, $concrete);

    /**
     * 
     * @param  \Ethereal\Contracts\Container\Container $instance
     * @return void
     */
    public static function setInstance($instance);

    /**
     * 
     * @return \Ethereal\Contracts\Container\Container
     */
    public static function getInstance();
}
