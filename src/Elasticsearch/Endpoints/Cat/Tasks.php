<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Cat;

use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Tasks
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Cat
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Tasks extends AbstractEndpoint
{
    public function getURI(): string
    {
        return "/_cat/tasks";
    }

    public function getParamWhitelist(): array
    {
        return [
            'format',
            'node_id',
            'actions',
            'detailed',
            'parent_task',
            'h',
            'help',
            's',
            'v'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
