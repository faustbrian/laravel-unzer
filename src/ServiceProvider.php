<?php

declare(strict_types=1);

namespace BombenProdukt\Unzer;

use Illuminate\Contracts\Container\Container;
use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        $this->app->singleton('unzer', function (Container $app) {
            return new ConnectionManager($app['config']);
        });
    }
}
