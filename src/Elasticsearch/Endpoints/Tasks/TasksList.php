<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Tasks;

use BeynElasticsearch\Common\Exceptions;
use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class List
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Tasks
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class TasksList extends AbstractEndpoint
{

    /**
     * @throws \BeynElasticsearch\Common\Exceptions\RuntimeException
     */
    public function getURI(): string
    {
        return "/_tasks";
    }

    public function getParamWhitelist(): array
    {
        return [
            'nodes',
            'actions',
            'detailed',
            'parent_task_id',
            'wait_for_completion',
            'group_by',
            'timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
