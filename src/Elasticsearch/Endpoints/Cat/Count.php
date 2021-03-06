<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Cat;

use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Count
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Cat
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Count extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/_cat/count/$index";
        }
        return "/_cat/count";
    }

    public function getParamWhitelist(): array
    {
        return [
            'format',
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
