<?php

/**
 * @package    Toolbox
 *
 * @copyright  (C) 2025 Dazzle Software, LLC. <https://www.dazzlesoftware.org>
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace DazzleSoftware\Toolbox\ArrayTraits;

/**
 * Implements \Iterator interface.
 *
 * @package DazzleSoftware\Toolbox\ArrayTraits
 * @author Dazzle Software
 * @license GNU/GPLv3
 */
trait Iterator
{
    /** @var bool Hack to make Iterator work together with unset(). */
    private $iteratorUnset = false;

    /**
     * Returns the current element.
     *
     * @return mixed  Can return any type.
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->items);
    }

    /**
     * Returns the key of the current element.
     *
     * @return string|null  Returns key on success, or NULL on failure.
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return (string)key($this->items);
    }

    /**
     * Moves the current position to the next element.
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function next()
    {
        if ($this->iteratorUnset) {
            // If current item was unset, position is already in the next element (do nothing).
            $this->iteratorUnset = false;
        } else {
            next($this->items);
        }
    }

    /**
     * Rewinds back to the first element of the Iterator.
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function rewind()
    {
        $this->iteratorUnset = false;
        reset($this->items);
    }

    /**
     * This method is called after Iterator::rewind() and Iterator::next() to check if the current position is valid.
     *
     * @return bool  Returns TRUE on success or FALSE on failure.
     */
    #[\ReturnTypeWillChange]
    public function valid()
    {
        return key($this->items) !== null;
    }
}
