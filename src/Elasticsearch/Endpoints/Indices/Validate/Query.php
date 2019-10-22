<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Indices\Validate;

use BeynElasticsearch\Endpoints\AbstractEndpoint;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class Query
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Indices\Validate
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Query extends AbstractEndpoint
{
    /**
     * @throws \BeynElasticsearch\Common\Exceptions\InvalidArgumentException
     */
    public function setBody($body): Query
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    public function getURI(): string
    {
        $index = $this->index ?? null;
        $type = $this->type ?? null;

        if (isset($index) && isset($type)) {
            return "/$index/$type/_validate/query";
        }
        if (isset($index)) {
            return "/$index/_validate/query";
        }
        return "/_validate/query";
    }

    public function getParamWhitelist(): array
    {
        return [
            'explain',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'q',
            'analyzer',
            'analyze_wildcard',
            'default_operator',
            'df',
            'lenient',
            'rewrite',
            'all_shards'
        ];
    }

    public function getMethod(): string
    {
        return isset($this->body) ? 'POST' : 'GET';
    }
}
