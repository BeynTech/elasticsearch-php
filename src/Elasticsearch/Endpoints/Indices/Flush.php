<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Indices;

use BeynElasticsearch\Endpoints\AbstractEndpoint;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class Flush
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Flush extends AbstractEndpoint
{
    /**
     * @throws \BeynElasticsearch\Common\Exceptions\RuntimeException
     */
    public function getURI(): string
    {
        $index = $this->index ?? null;
        if (isset($index)) {
            return "/$index/_flush";
        }
        return "/_flush";
    }

    public function getParamWhitelist(): array
    {
        return [
            'force',
            'wait_if_ongoing',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}
