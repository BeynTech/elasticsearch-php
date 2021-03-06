<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints;

use BeynElasticsearch\Common\Exceptions\InvalidArgumentException;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class FieldCaps
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class FieldCaps extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_field_caps";
        }
        return "/_field_caps";
    }

    public function getParamWhitelist(): array
    {
        return [
            'fields',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'include_unmapped'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
