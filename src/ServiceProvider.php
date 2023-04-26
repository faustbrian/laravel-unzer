<?php

declare(strict_types=1);

namespace BombenProdukt\Unzer;

use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;
use Illuminate\Contracts\Container\Container;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        $this->app->singleton('unzer', function (Container $app) {
            return new ConnectionManager($app['config']);
        });
    }
}
