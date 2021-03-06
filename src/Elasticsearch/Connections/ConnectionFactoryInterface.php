<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Connections;

/**
 * Class AbstractConnection
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Connections
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
interface ConnectionFactoryInterface
{
    public function create(array $hostDetails): ConnectionInterface;
}
