<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Indices;

use BeynElasticsearch\Endpoints\AbstractEndpoint;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class Split
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Indices
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Split extends AbstractEndpoint
{

    private $target;

    /**
     * @param array|object $body
     */
    public function setBody($body): Split
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    public function setTarget(?string $target): Split
    {
        if ($target === null) {
            return $this;
        }
        $this->target = $target;

        return $this;
    }

    /**
     * @throws \BeynElasticsearch\Common\Exceptions\RuntimeException
     */
    public function getURI(): string
    {
        if (isset($this->index) !== true) {
            throw new Exceptions\RuntimeException(
                'index is required for Split'
            );
        }

        if (isset($this->target) !== true) {
            throw new Exceptions\RuntimeException(
                'target is required for Split'
            );
        }

        return "/{$this->index}/_split/{$this->target}";
    }

    public function getParamWhitelist(): array
    {
        return [
            'copy_settings',
            'timeout',
            'master_timeout',
            'wait_for_active_shards'
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }
}
