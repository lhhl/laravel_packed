<?php

namespace App\Providers;

/**
 * ServiceProvider
 *
 * The service provider for the modules.
 *
 * @author Long
 * @package App\Modules
 */
class ModulesServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $modules = ModulesLoading::getModulesName();
        while (list(,$module) = each($modules)) {
            $modulePath = ModulesLoading::getLocationModules() . $module;

            //Load the route
            if (file_exists($modulePath . '/routes.php')) {
                if (! $this->app->routesAreCached()) {
                    require $modulePath . '/routes.php';
                }
            }

            if (is_dir($modulePath . '/Views')) {
                //Load the view
                $this->loadViewsFrom($modulePath . '/Views', $module);

                //Publishing View
                //$this->publishes([
                    //$modulePath  . '/Views' => resource_path('views/vendor/' . $module),
                //]);
            }

            //Load Translation
            if (is_dir($modulePath . '/Langs')) {
                $this->loadTranslationsFrom($modulePath . '/Langs', $module);
            }

            //Load Config
            $moduleLowerCase = strtolower($module);
            if (file_exists($modulePath . '/Configs/' . $module . '.php')) {
                $this->publishes([
                    $modulePath  . '/Configs/' . $module . '.php' => config_path($moduleLowerCase . '.php'),
                ], 'config');
            }

            //Load Asset
            if (is_dir($modulePath . '/Assets')) {
                $this->publishes([
                    $modulePath  . '/Assets' => public_path('vendor/' . $module),
                ], 'assets');
            }

            //Load Migration
            //if (is_dir($modulePath . '/Migrations')) {
                //$this->publishes([
                    //$modulePath  . '/Migrations' => database_path('migrations')
                //], 'migrations');
            //}

        }
    }

    public function register()
    {

    }
}
