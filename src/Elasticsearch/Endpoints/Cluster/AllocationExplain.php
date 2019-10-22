<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Cluster;

use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class AllocationExplain
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Cluster
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class AllocationExplain extends AbstractEndpoint
{
    public function setBody($body): AllocationExplain
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    public function getURI(): string
    {
        return "/_cluster/allocation/explain";
    }

    public function getParamWhitelist(): array
    {
        return [
            'include_yes_decisions',
            'include_disk_info'
        ];
    }

    public function getMethod(): string
    {
        return isset($this->body) ? 'POST' : 'GET';
    }
}
