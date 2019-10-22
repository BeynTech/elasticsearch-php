<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Indices\Settings;

use BeynElasticsearch\Endpoints\AbstractEndpoint;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class Put
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Indices\Settings
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Put extends AbstractEndpoint
{
    /**
     * @throws \BeynElasticsearch\Common\Exceptions\InvalidArgumentException
     */
    public function setBody($body): Put
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
            return "/$index/_settings";
        }
        return "/_settings";
    }

    public function getParamWhitelist(): array
    {
        return [
            'master_timeout',
            'timeout',
            'preserve_existing',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'flat_settings'
        ];
    }

    /**
     * @throws \BeynElasticsearch\Common\Exceptions\RuntimeException
     */
    public function getBody()
    {
        if (isset($this->body) !== true) {
            throw new Exceptions\RuntimeException('Body is required for Put Settings');
        }

        return $this->body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }
}
