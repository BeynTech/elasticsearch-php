<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints\Indices\Template;

use BeynElasticsearch\Endpoints\AbstractEndpoint;
use BeynElasticsearch\Common\Exceptions;

/**
 * Class Get
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints\Indices\Template
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Get extends AbstractEndpoint
{
    /**
     * The name of the template
     *
     * @var string
     */
    private $name;

    public function setName(?string $name): Get
    {
        if (isset($name) !== true) {
            return $this;
        }

        $this->name = $name;

        return $this;
    }

    /**
     * @throws \BeynElasticsearch\Common\Exceptions\RuntimeException
     */
    public function getURI(): string
    {
        $name = $this->name ?? null;

        if (isset($name)) {
            return "/_template/$name";
        }
        return "/_template";
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist(): array
    {
        return [
            'include_type_name',
            'flat_settings',
            'master_timeout',
            'local'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
