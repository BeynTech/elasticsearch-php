<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Snapshot;

use BeynElasticsearch\Endpoints\AbstractEndpoint;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class Delete
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Snapshot
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Delete extends AbstractEndpoint
{
    /**
     * A repository name
     *
     * @var string
     */
    private $repository;

    /**
     * A snapshot name
     *
     * @var string
     */
    private $snapshot;

    public function setRepository(?string $repository): Delete
    {
        if (isset($repository) !== true) {
            return $this;
        }

        $this->repository = $repository;

        return $this;
    }

    public function setSnapshot(?string $snapshot): Delete
    {
        if (isset($snapshot) !== true) {
            return $this;
        }

        $this->snapshot = $snapshot;

        return $this;
    }

    /**
     * @throws \BeynElasticsearch\Common\Exceptions\RuntimeException
     */
    public function getURI(): string
    {
        if (isset($this->repository) !== true) {
            throw new Exceptions\RuntimeException(
                'repository is required for Delete'
            );
        }
        if (isset($this->snapshot) !== true) {
            throw new Exceptions\RuntimeException(
                'snapshot is required for Delete'
            );
        }
        return "/_snapshot/{$this->repository}/{$this->snapshot}";
    }

    public function getParamWhitelist(): array
    {
        return [
            'master_timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }
}
