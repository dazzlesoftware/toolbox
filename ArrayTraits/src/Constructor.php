<?php

namespace DazzleSoftware\Toolbox\ArrayTraits;

/**
 * Implements Constructor for setting items.
 *
 * @package DazzleSoftware\Toolbox\ArrayTraits
 * @author Dazzle Software
 * @license GNU/GPLv3
 */
trait Constructor
{
    /**
     * Constructor to initialize array.
     *
     * @param array $items Initial items inside the iterator.
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }
}
