<?php

namespace AlaaTV\BehpardakhtDriver;

use Illuminate\Support\ServiceProvider;

class BehpardakhtServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config.php', 'behpardakht');

        PaymentDriver::addDriver('mellat', BehpardakhtGateWay::class, 4);
    }

    public function boot()
    {

    }
}