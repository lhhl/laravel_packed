<?php

namespace App\Providers;

/**
 * Modules Loading Class
 *
 *
 * @author Long
 * @package App\Modules
 */
class ModulesLoading
{
    public static function getModulesName()
    {
        $instance = new self();
        $dir = $instance->getDirModules();
        $moduleArr = array();
        foreach ($dir as $path) {
            $path = rtrim($path, '/');
            $pathArr = explode('/', $path);
            $moduleArr[] = $pathArr[count($pathArr) - 1];
        }
        return $moduleArr;
    }

    public function getDirModules()
    {
        $path = $this->getLocationModules();
        $dirs = array_filter(glob($path . '*'), 'is_dir');
        return $dirs;
    }

    public static function getLocationModules()
    {
        $path = str_replace('\\', '/', __DIR__);
        return $path . '/../Modules/';
    }
}