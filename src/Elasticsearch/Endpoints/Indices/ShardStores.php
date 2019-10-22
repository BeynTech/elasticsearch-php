<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Indices;

use BeynElasticsearch\Endpoints\AbstractEndpoint;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class ShardStores
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Indices
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */

class ShardStores extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_shard_stores";
        }
        return "/_shard_stores";
    }

    public function getParamWhitelist(): array
    {
        return [
            'status',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
