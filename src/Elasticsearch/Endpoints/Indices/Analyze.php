<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Indices;

use BeynElasticsearch\Endpoints\AbstractEndpoint;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class Analyze
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Indices
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Analyze extends AbstractEndpoint
{
    public function setBody($body): Analyze
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
        if (isset($index)) {
            return "/$index/_analyze";
        }
        return "/_analyze";
    }

    public function getParamWhitelist(): array
    {
        return [
            'index'
        ];
    }

    public function getMethod(): string
    {
        return isset($this->body) ? 'POST' : 'GET';
    }
}
