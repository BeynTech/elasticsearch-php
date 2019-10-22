<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Indices\Alias;

use BeynElasticsearch\Common\Exceptions;
use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Exists
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Indices\Alias
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Exists extends AbstractEndpoint
{
    /**
     * A comma-separated list of alias names to return
     *
     * @var string
     */
    private $name;

    public function setName(?string $name): Exists
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
                'name is required for Exists'
            );
        }
        $name = $this->name;
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_alias/$name";
        }
        return "/_alias/$name";
    }

    public function getParamWhitelist(): array
    {
        return [
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'local'
        ];
    }

    public function getMethod(): string
    {
        return 'HEAD';
    }
}
