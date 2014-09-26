<?php

namespace Concretehouse\Component\Pdo\Test;

use Concretehouse\Component\Pdo\Pdo;
use Phake;

class PdoExt extends Pdo { public function __construct() {} }

/**
 * Test for pdo.
 */
class PdoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Set up
     */
    public function setUp()
    {
        $this->pdo = new PdoExt;
    }

    /**
     * @test
     */
    public function implementsPdoInterface()
    {
        $this->assertInstanceOf('Concretehouse\Component\Pdo\PdoInterface', $this->pdo);
    }

    /**
     * @test
     */
    public function extendsSplPdo()
    {
        $this->assertInstanceOf('\Pdo', $this->pdo);
    }
}
