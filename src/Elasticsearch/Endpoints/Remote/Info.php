<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Remote;

use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Info
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Cluster\Nodes
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Info extends AbstractEndpoint
{
    public function getURI(): string
    {
        return "/_remote/info";
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
