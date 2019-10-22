<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Endpoints;

use BeynElasticsearch\Serializers\SerializerInterface;

/**
 * Interface BulkEndpointInterface
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Endpoints
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
interface BulkEndpointInterface
{
    /**
     * Constructor
     *
     * @param SerializerInterface $serializer A serializer
     */
    public function __construct(SerializerInterface $serializer);
}
