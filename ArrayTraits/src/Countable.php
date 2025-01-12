<?php

/**
 * @package    Toolbox
 *
 * @copyright  (C) 2025 Dazzle Software, LLC. <https://www.dazzlesoftware.org>
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace DazzleSoftware\Toolbox\ArrayTraits;

use function count;

/**
 * Implements \Countable interface.
 *
 * @package DazzleSoftware\Toolbox\ArrayTraits
 * @author Dazzle Software <support@dazzlesoftware.org>
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
