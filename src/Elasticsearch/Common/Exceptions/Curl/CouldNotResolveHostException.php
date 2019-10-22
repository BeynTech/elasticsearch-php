<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Common\Exceptions\Curl;

use BeynElasticsearch\Common\Exceptions\BeynElasticsearchException;
use BeynElasticsearch\Common\Exceptions\TransportException;

/**
 * Class CouldNotResolveHostException
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\Common\Exceptions\Curl
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class CouldNotResolveHostException extends TransportException implements BeynElasticsearchException
{
}
