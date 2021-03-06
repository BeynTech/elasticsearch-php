<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Indices\Mapping;

use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Get
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Indices\Mapping
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Get extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;
        $type = $this->type ?? null;
        if (isset($index) && isset($type)) {
            return "/$index/_mapping/$type";
        }
        if (isset($index)) {
            return "/$index/_mapping";
        }
        if (isset($type)) {
            return "/_mapping/$type";
        }
        return "/_mapping";
    }

    public function getParamWhitelist(): array
    {
        return [
            'include_type_name',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'master_timeout',
            'local'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
