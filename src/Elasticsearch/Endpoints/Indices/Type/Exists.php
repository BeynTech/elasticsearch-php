<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Indices\Type;

use BeynElasticsearch\Endpoints\AbstractEndpoint;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class Exists
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Indices\Type
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Exists extends AbstractEndpoint
{
    /**
     * @throws \BeynElasticsearch\Common\Exceptions\RuntimeException
     */
    public function getURI(): string
    {
        if (isset($this->index) !== true) {
            throw new Exceptions\RuntimeException(
                'index is required for Exists'
            );
        }
        if (isset($this->type) !== true) {
            throw new Exceptions\RuntimeException(
                'type is required for Exists'
            );
        }
        return "/{$this->index}/_mapping/{$this->type}";
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
