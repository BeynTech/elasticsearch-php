<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Indices;

use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Segments
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Indices
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Segments extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;
        if (isset($index)) {
            return "/$index/_segments";
        }
        return "/_segments";
    }

    public function getParamWhitelist(): array
    {
        return [
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'verbose'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
