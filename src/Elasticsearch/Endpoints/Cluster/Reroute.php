<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Cluster;

use BeynElasticsearch\Endpoints\AbstractEndpoint;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class Reroute
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Cluster
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Reroute extends AbstractEndpoint
{
    public function setBody($body): Reroute
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    public function getURI(): string
    {
        return "/_cluster/reroute";
    }

    public function getParamWhitelist(): array
    {
        return [
            'dry_run',
            'explain',
            'retry_failed',
            'metric',
            'master_timeout',
            'timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}
