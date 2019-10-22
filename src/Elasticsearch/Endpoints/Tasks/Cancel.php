<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Tasks;

use BeynElasticsearch\Common\Exceptions;
use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Cancel
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Tasks
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Cancel extends AbstractEndpoint
{
    private $taskId;

    /**
     * @throws \BeynElasticsearch\Common\Exceptions\InvalidArgumentException
     */
    public function setTaskId(?string $taskId): Cancel
    {
        if (isset($taskId) !== true) {
            return $this;
        }

        $this->taskId = $taskId;

        return $this;
    }

    /**
     * @throws \BeynElasticsearch\Common\Exceptions\RuntimeException
     */
    public function getURI(): string
    {
        $taskId = $this->taskId ?? null;

        if (isset($taskId)) {
            return "/_tasks/$taskId/_cancel";
        }
        return "/_tasks/_cancel";
    }

    public function getParamWhitelist(): array
    {
        return [
            'nodes',
            'actions',
            'parent_task_id'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}
