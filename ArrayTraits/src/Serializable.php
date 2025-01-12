<?php

/**
 * @package    Toolbox
 *
 * @copyright  (C) 2025 Dazzle Software, LLC. <https://www.dazzlesoftware.org>
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace DazzleSoftware\Toolbox\ArrayTraits;

/**
 * Implements \Serializable interface.
 *
 * @package DazzleSoftware\Toolbox\ArrayTraits
 * @author Dazzle Software
 * @license GNU/GPLv3
 */
trait Serializable
{
    /**
     * Returns string representation of the object.
     *
     * @return string  Returns the string representation of the object.
     * @final
     * @deprecated Override `__serialize()` instead.
     */
    #[\ReturnTypeWillChange]
    public function serialize()
    {
        return serialize($this->__serialize());
    }

    /**
     * Called during unserialization of the object.
     *
     * @param string $serialized  The string representation of the object.
     * @return void
     * @final
     * @deprecated Override `__unserialize()` instead.
     */
    #[\ReturnTypeWillChange]
    public function unserialize($serialized)
    {
        $this->__unserialize(unserialize($serialized, ['allowed_classes' => false]));
    }

    /**
     * @return array
     */
    #[\ReturnTypeWillChange]
    public function __serialize()
    {
        return $this->items;
    }

    /**
     * @param array $data
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function __unserialize($data)
    {
        $this->items = $data;
    }
}
