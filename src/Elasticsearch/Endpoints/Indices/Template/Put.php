<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Indices\Template;

use BeynElasticsearch\Endpoints\AbstractEndpoint;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class Put
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Indices\Template
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Put extends AbstractEndpoint
{
    /**
     * The name of the template
     *
     * @var string
     */
    private $name;

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

    public function setName(?string $name): Put
    {
        if (isset($name) !== true) {
            return $this;
        }

        $this->name = $name;

        return $this;
    }

    /**
     * @throws \BeynElasticsearch\Common\Exceptions\RuntimeException
     */
    public function getURI(): string
    {
        if (isset($this->name) !== true) {
            throw new Exceptions\RuntimeException(
                'name is required for Put'
            );
        }
        return "/_template/{$this->name}";
    }

    public function getParamWhitelist(): array
    {
        return [
            'include_type_name',
            'order',
            'create',
            'timeout',
            'master_timeout',
            'flat_settings'
        ];
    }

    /**
     * @throws \BeynElasticsearch\Common\Exceptions\RuntimeException
     */
    public function getBody()
    {
        if (isset($this->body) !== true) {
            throw new Exceptions\RuntimeException('Body is required for Put Template');
        }

        return $this->body;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }
}
