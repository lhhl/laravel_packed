<?php

function routeListview($route, $name, $controller)
{
    $route::get($name, $controller . '@index')->name($name . '_index');
    $route::get($name . '/create', $controller . '@create')->name($name . '_create');
    $route::post($name . '/store', $controller . '@store')->name($name . '_store');
    $route::get($name . '/edit/{id}', $controller . '@edit')->name($name . '_edit');
    $route::post($name . '/update/{id}', $controller . '@update')->name($name . '_update');
    $route::get($name . '/destroy/{id}', $controller . '@destroy')->where('id', '[0-9]+')->name($name . '_destroy');

    $route::get($name . '/show/{id}', $controller . '@show')->where('id', '[0-9]+')->name($name . '_show');
}
