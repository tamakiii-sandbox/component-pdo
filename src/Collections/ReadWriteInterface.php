<?php

namespace Concretehouse\Component\Pdo\Collections;

/**
 * Pdo read/write collection interface.
 */
interface ReadWriteInterface extends CollectionInterface
{
    /**
     * @return PdoInterface
     */
    public function getRead();

    /**
     * @return PdoInterface
     */
    public function getWrite();
}
