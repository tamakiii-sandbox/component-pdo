<?php

namespace Concretehouse\Component\Pdo\Test\Collections;

use Phake;

/**
 * Test for pdo collection interface.
 */
class ReadWriteInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function canUse()
    {
        Phake::mock('Concretehouse\Component\Pdo\Collections\ReadWriteInterface');
    }
}
