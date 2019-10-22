<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Ingest\Pipeline;

use BeynElasticsearch\Common\Exceptions;
use BeynElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ProcessorGrok
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Ingest
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ProcessorGrok extends AbstractEndpoint
{
    public function getURI(): string
    {
        return "/_ingest/processor/grok";
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
