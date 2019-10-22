<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Cluster;

use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Pendingtasks
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Cluster
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PendingTasks extends AbstractEndpoint
{
    public function getURI(): string
    {
        return "/_cluster/pending_tasks";
    }

    public function getParamWhitelist(): array
    {
        return [
            'local',
            'master_timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
