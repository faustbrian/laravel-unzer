<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Unzer;

use BaseCodeOy\Crate\Package\AbstractServiceProvider;
use Illuminate\Contracts\Container\Container;

final class ServiceProvider extends AbstractServiceProvider
{
    #[\Override()]
    public function packageRegistered(): void
    {
        $this->app->singleton(
            'unzer',
            fn (Container $container): \BaseCodeOy\Unzer\ConnectionManager => new ConnectionManager($container['config']),
        );
    }
}
