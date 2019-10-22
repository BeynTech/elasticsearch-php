<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Cluster;

use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * RemoteInfo Health
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Cluster
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class RemoteInfo extends AbstractEndpoint
{
    public function getURI(): string
    {
        return "/_remote/info";
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
