<?php

namespace MyPackage\Providers;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // ...
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '../config/MyCustomPackage.php' => config_path('MyCustomPackage.php'),
            __DIR__ . '../resources/views' => resource_path('views/MyCustomPackage'),
        ]);
    }
}
