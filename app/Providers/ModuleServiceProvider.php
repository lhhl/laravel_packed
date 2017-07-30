<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadHelpers();
        $this->apply(['route', 'view']);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
    * Apply resource to all module.
    *
    * @param  array  $type
    * @return void
    */
    private function apply($types)
    {
        $resourceLoacation = [
            'route'         =>      config('module.router_name'),
            'migration'     =>      config('module.migration_folder'),
            'translation'   =>      config('module.translation_folder'),
            'view'          =>      config('module.view_folder'),
        ];

        $listModule = $this->getDirModules();
        foreach ($listModule as $name => $module) {
            foreach ($types as $type) {
                $this->loadModuleResources($type, $module . '/' . $resourceLoacation[$type], $name);
            }
        }
    }

    /**
    * Load Helpers.
    *
    * @return void
    */
    private function loadHelpers()
    {
        foreach (glob(config('module.helper_path') . '*.php') as $filename) {
            require_once($filename);
        }
        return;
    }

    /**
    * Load resources from module.
    *
    * @param  string  $type
    * @return void
    */
    private function loadModuleResources($type, $path, $moduleName)
    {
        $typeParam = [
            'route'         =>  'loadRoutesFrom',
            'migration'     =>  'loadMigrationsFrom',
            'translation'   =>  'loadTranslationsFrom',
            'view'          =>  'loadViewsFrom'
        ];

        if ($type == 'route' && file_exists($path)) {
            return $this->{$typeParam[$type]}($path);
        }

        if ($type != 'route') {
            return $this->{$typeParam[$type]}($path, $moduleName);
        }
    }

    /**
    * Get all module dir.
    *
    * @return Array
    */
    private function getDirModules()
    {
        $pathModuleDir = $this->getModulePath('');
        $moduleDirs = array_filter(glob($pathModuleDir . '*'), 'is_dir');
        $result = [];
        array_walk($moduleDirs, function (&$value, &$key) use (&$result) {
            $valueArr = explode('/', trim($value, '/'));
            $key = $valueArr[count($valueArr) - 1];
            $result[$key] = $value;
        });
        return $result;
    }

    /**
    * Get Module Path.
    *
    * @return String
    */
    private function getModulePath($suff)
    {
        $path = str_replace('\\', '/', __DIR__);
        return $path . '/../' . config('module.module_location') . '/' . $suff;
    }
}
