<?php

/**
 * @package    Toolbox
 *
 * @copyright  (C) 2025 Dazzle Software, LLC. <https://www.dazzlesoftware.org>
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace DazzleSoftware\Toolbox\Event;

use DazzleSoftware\Toolbox\ArrayTraits\ArrayAccess;
use DazzleSoftware\Toolbox\ArrayTraits\Constructor;
use DazzleSoftware\Toolbox\ArrayTraits\Export;
use Symfony\Component\EventDispatcher\Event as BaseEvent;

/**
 * Implements Symfony Event interface.
 *
 * @package DazzleSoftware\Toolbox\Event
 * @author Dazzle Software <support@dazzlesoftware.org>
 * @license GNU/GPLv3
 * @deprecated Event classes will be removed in the future. Use PSR-14 implementation instead.
 */
class Event extends BaseEvent implements \ArrayAccess
{
    use ArrayAccess, Constructor, Export;

    /** @var array */
    protected $items = [];
}
