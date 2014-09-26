<?php

namespace Concretehouse\Component\Pdo\Test;

use Phake;

/**
 * Test for pdo interface.
 */
class PdoInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function canUse()
    {
        Phake::mock('Concretehouse\Component\Pdo\PdoInterface');
    }
}
