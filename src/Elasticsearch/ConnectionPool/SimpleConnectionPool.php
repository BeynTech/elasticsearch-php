<?php

declare(strict_types = 1);

namespace BeynElasticsearch\ConnectionPool;

use BeynElasticsearch\ConnectionPool\Selectors\SelectorInterface;
use BeynElasticsearch\Connections\Connection;
use BeynElasticsearch\Connections\ConnectionFactoryInterface;
use BeynElasticsearch\Connections\ConnectionInterface;

class SimpleConnectionPool extends AbstractConnectionPool implements ConnectionPoolInterface
{

    /**
     * {@inheritdoc}
     */
    public function __construct($connections, SelectorInterface $selector, ConnectionFactoryInterface $factory, $connectionPoolParams)
    {
        parent::__construct($connections, $selector, $factory, $connectionPoolParams);
    }

    public function nextConnection(bool $force = false): ConnectionInterface
    {
        return $this->selector->select($this->connections);
    }

    public function scheduleCheck(): void
    {
    }
}
