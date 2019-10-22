<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Indices\Aliases;

use BeynElasticsearch\Endpoints\AbstractEndpoint;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class Update
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Indices\Aliases
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Update extends AbstractEndpoint
{
    /**
     * @throws \BeynElasticsearch\Common\Exceptions\InvalidArgumentException
     */
    public function setBody($body): Update
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    public function getURI(): string
    {
        return "/_aliases";
    }

    public function getParamWhitelist(): array
    {
        return [
            'timeout',
            'master_timeout',
        ];
    }

    /**
     * @throws \BeynElasticsearch\Common\Exceptions\RuntimeException
     */
    public function getBody()
    {
        if (isset($this->body) !== true) {
            throw new Exceptions\RuntimeException('Body is required for Update Aliases');
        }

        return $this->body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}
