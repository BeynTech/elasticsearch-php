<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Ingest\Pipeline;

use BeynElasticsearch\Common\Exceptions;
use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Get
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Ingest
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Get extends AbstractEndpoint
{
    public function getURI(): string
    {
        $id = $this->id ?? null;
        if (isset($id)) {
            return "/_ingest/pipeline/$id";
        }
        return "/_ingest/pipeline";
    }

    public function getParamWhitelist(): array
    {
        return [
            'master_timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
