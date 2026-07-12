<?php

namespace DazzleSoftware\Toolbox\ArrayTraits;

use function count;

/**
 * Implements \Countable interface.
 *
 * @package DazzleSoftware\Toolbox\ArrayTraits
 * @author Dazzle Software
 * @license GNU/GPLv3
 */
trait Countable
{
    /**
     * Implements Countable interface.
     *
     * @return int
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->items);
    }
}
