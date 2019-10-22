<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Cluster\Settings;

use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Get
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Cluster\Settings
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */

class Get extends AbstractEndpoint
{
    public function getURI(): string
    {
        return "/_cluster/settings";
    }

    public function getParamWhitelist(): array
    {
        return [
            'flat_settings',
            'master_timeout',
            'timeout',
            'include_defaults'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
