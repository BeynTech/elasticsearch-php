<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Cat;

use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Shards
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Cat
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Shards extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/_cat/shards/$index";
        }

        return "/_cat/shards";
    }

    public function getParamWhitelist(): array
    {
        return [
            'format',
            'bytes',
            'local',
            'master_timeout',
            'h',
            'help',
            's',
            'v'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
