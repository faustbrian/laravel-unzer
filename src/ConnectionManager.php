<?php

declare(strict_types=1);

namespace BombenProdukt\Unzer;

use BombenProdukt\Manager\AbstractManager;
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
