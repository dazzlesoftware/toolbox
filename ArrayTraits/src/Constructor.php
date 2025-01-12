<?php

/**
 * @package    Toolbox
 *
 * @copyright  (C) 2025 Dazzle Software, LLC. <https://www.dazzlesoftware.org>
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace DazzleSoftware\Toolbox\ArrayTraits;

/**
 * Implements Constructor for setting items.
 *
 * @package DazzleSoftware\Toolbox\ArrayTraits
 * @author Dazzle Software <support@dazzlesoftware.org>
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
