<?php

declare(strict_types = 1);

namespace BeynElasticsearch\ConnectionPool\Selectors;

use BeynElasticsearch\Connections\ConnectionInterface;

/**
 * Class StickyRoundRobinSelector
 *
 * @category BeynElasticsearch
 * @package  BeynElasticsearch\ConnectionPool\Selectors\ConnectionPool
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class StickyRoundRobinSelector implements SelectorInterface
{
    /**
     * @var int
     */
    private $current = 0;

    /**
     * @var int
     */
    private $currentCounter = 0;

    /**
     * Use current connection unless it is dead, otherwise round-robin
     *
     * @param ConnectionInterface[] $connections Array of connections to choose from
     */
    public function select(array $connections): ConnectionInterface
    {
        /**
 * @var ConnectionInterface[] $connections
*/
        if ($connections[$this->current]->isAlive()) {
            return $connections[$this->current];
        }

        $this->currentCounter += 1;
        $this->current = $this->currentCounter % count($connections);

        return $connections[$this->current];
    }
}
