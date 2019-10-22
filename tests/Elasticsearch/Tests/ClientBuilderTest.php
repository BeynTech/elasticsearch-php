<?php

declare(strict_types = 1);

namespace BeynElasticsearch\Tests;

use BeynElasticsearch\ClientBuilder;
use BeynElasticsearch\Common\Exceptions\InvalidArgumentException;
use BeynElasticsearch\Tests\ClientBuilder\DummyLogger;
use PHPUnit\Framework\TestCase;

class ClientBuilderTest extends TestCase
{
    /**
     * @expectedException TypeError
     */
    public function testClientBuilderThrowsExceptionForIncorrectLoggerClass()
    {
        ClientBuilder::create()->setLogger(new DummyLogger);
    }

    /**
     * @expectedException TypeError
     */
    public function testClientBuilderThrowsExceptionForIncorrectTracerClass()
    {
        ClientBuilder::create()->setTracer(new DummyLogger);
    }
}
