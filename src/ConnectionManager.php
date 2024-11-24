<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Unzer;

use BaseCodeOy\Manager\AbstractManager;
use UnzerSDK\Unzer;

final class ConnectionManager extends AbstractManager
{
    protected function createConnection(array $config): object
    {
        return new Unzer($config['private_key']);
    }

    protected function getConfigName(): string
    {
        return 'unzer';
    }
}
