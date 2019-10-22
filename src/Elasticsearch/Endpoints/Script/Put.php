<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Script;

use BeynElasticsearch\Endpoints\AbstractEndpoint;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class Put
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Script
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Put extends AbstractEndpoint
{
    /**
     * @var string
     */
    protected $context;

    public function setBody($body): Put
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    public function setContext(?string $context): Put
    {
        if ($context !== null) {
            $this->context = $context;
        }
        return $this;
    }

    /**
     * @throws \BeynElasticsearch\Common\Exceptions\RuntimeException
     */
    public function getURI(): string
    {
        if (isset($this->id) !== true) {
            throw new Exceptions\RuntimeException(
                'id is required for Put'
            );
        }
        $id = $this->id;
        $context = $this->context ?? null;

        if (isset($context)) {
            return "/_scripts/$id/$context";
        }
        return "/_scripts/$id";
    }

    public function getParamWhitelist(): array
    {
        return [
            'timeout',
            'master_timeout',
            'context'
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }
}
