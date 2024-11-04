<?php

declare(strict_types=1);

namespace BaseCodeOy\Unzer;

use BaseCodeOy\PackagePowerPack\Package\AbstractServiceProvider;
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
