<?php

/**
 * @package    Toolbox
 *
 * @copyright  (C) 2025 Dazzle Software, LLC. <https://www.dazzlesoftware.org>
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace DazzleSoftware\Toolbox\Event;

use Symfony\Component\EventDispatcher\Event as BaseEvent;
use Symfony\Component\EventDispatcher\EventDispatcher as BaseEventDispatcher;

/**
 * Implements Symfony EventDispatcher interface.
 *
 * @package DazzleSoftware\Toolbox\Event
 * @author Dazzle Software <support@dazzlesoftware.org>
 * @license GNU/GPLv3
 * @deprecated Event classes will be removed in the future. Use PSR-14 implementation instead.
 */
class EventDispatcher extends BaseEventDispatcher
{
    /**
     * @param string $eventName
     * @param BaseEvent|null $event
     * @return BaseEvent|null
     */
    public function dispatch($eventName, BaseEvent $event = null)
    {
        if (null === $event) {
            $event = new Event();
        }

        return parent::dispatch($eventName, $event);
    }
}
