<?php

namespace Ethereal\Contracts\Foundation;

interface Application
{
    /**
     * Get absolute path from root directory
     * 
     * @param  string $path
     * @return string
     */
    public function basePath(string $path);

    /**
     * 
     * @param  string $path
     * @return void
     */
    public function useConfigPath(string $path);

    /**
     * Get absolute path from config directory
     * 
     * @param  string $path
     * @return string
     */
    public function configPath(string $path);

    /**
     * 
     * @param  string $path
     * @return void
     */
    public function useDatabasePath(string $path);

    /**
     * Get absolute path from database directory
     * 
     * @param  string $path
     * @return string
     */
    public function databasePath(string $path);

    /**
     * 
     * @param  string $path
     * @return void
     */
    public function useResourcesPath(string $path);

    /**
     * Get absolute path from resources directory
     * 
     * @param  string $path
     * @return string
     */
    public function resourcesPath(string $path);

    /**
     * 
     * @param  string $path
     * @return void
     */
    public function useRoutesPath(string $path);

    /**
     * Get absolute path from routes directory
     * 
     * @param  string $path
     * @return string
     */
    public function routesPath(string $path);

    /**
     * 
     * @param  string $path
     * @return void
     */
    public function useStoragePath(string $path);

    /**
     * Get absolute path from storage directory
     * 
     * @param  string $path
     * @return string
     */
    public function storagePath(string $path);
}
