<?php

namespace Concretehouse\Component\Pdo\Collections;

use Concretehouse\Component\Pdo\PdoInterface;

/**
 * Pdo collections of read and write.
 */
class ReadWrite implements ReadWriteInterface
{
    /**
     * @var PdoInterface
     */
    private $read;

    /**
     * @var PdoInterface
     */
    private $write;


    /**
     * @param PdoInterface $read
     * @param PdoInterface $write
     */
    public function __construct(PdoInterface $read, PdoInterface $write)
    {
        $this->read = $read;
        $this->write = $write;
    }

    /**
     * @return PdoInterface
     */
    public function getRead()
    {
        return $this->read;
    }

    /**
     * @return PdoInterface
     */
    public function getWrite()
    {
        return $this->write;
    }
}
