<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Common\Exceptions;

/**
 * TransportException
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Common\Exceptions
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class TransportException extends \Exception implements BeynElasticsearchException
{
}
