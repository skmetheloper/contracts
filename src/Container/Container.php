<?php

namespace Ethereal\Contracts\Container;

use Psr\Container\ContainerInterface;
use Ethereal\Contracts\Foundation\Application;

interface Container implements ContainerInterface
{
    /**
     * Check the entry of the container by its name.
     *
     * @param  string $name Identifer of the entry to look for.
     *
     * @return bool
     */
    public function has($name);

    /**
     * Return the entry of the container by its name.
     *
     * @param  string $name Identifier of the entry to look for.
     *
     * @throws \Ethereal\Contracts\Container\NotFoundException
     *
     * @return mixed
     */
    public function get($name);

    /**
     * Register new entry of the container by its name.
     * 
     * @param  string           $name     Identifer of the entry to register.
     * @param  string|callable  $concrete The value of the entry to register.
     * @param  bool             $force    Default is `false`. Overwrite it if the entry name is already existed.
     *
     * @throws \Ethereal\Contracts\Container\DuplicatedBindingException
     *
     * @return void
     */
    public function bind($name, $concrete, $force = false);

    /**
     * 
     * @param  \Ethereal\Contracts\Container\Container $instance
     *
     * @return void
     */
    public static function setInstance($instance);

    /**
     * 
     * @return \Ethereal\Contracts\Container\Container
     */
    public static function getInstance();
}
