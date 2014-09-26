<?php

namespace Concretehouse\Component\Pdo\Test;

use Concretehouse\Component\Pdo\Collections\ReadWrite;
use Phake;

/**
 * Test for pdo interface.
 */
class PdoInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Set up
     */
    public function setUp()
    {
        $this->read = Phake::mock('Concretehouse\Component\Pdo\PdoInterface');
        $this->write = Phake::mock('Concretehouse\Component\Pdo\PdoInterface');
        $this->collection = new ReadWrite($this->read, $this->write);
    }

    /**
     * @test
     */
    public function implementsReadWriteInterface()
    {
        $this->assertInstanceOf('Concretehouse\Component\Pdo\Collections\ReadWriteInterface', $this->collection);
    }

    /**
     * @test
     */
    public function getReadReturnsPdoObjectForRead()
    {
        $this->assertSame($this->read, $this->collection->getRead());
    }

    /**
     * @test
     */
    public function getWriteReturnsPdoObjectForWrite()
    {
        $this->assertSame($this->write, $this->collection->getWrite());
    }
}
