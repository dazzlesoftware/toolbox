<?php

/**
 * @package    Toolbox
 *
 * @copyright  (C) 2025 Dazzle Software, LLC. <https://www.dazzlesoftware.org>
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace DazzleSoftware\Toolbox\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface as BaseEventSubscriberInterface;

/**
 * Defines EventSubscriberInterface.
 *
 * @package DazzleSoftware\Toolbox\Event
 * @author Dazzle Software <support@dazzlesoftware.org>
 * @license GNU/GPLv3
 * @deprecated Event classes will be removed in the future. Use PSR-14 implementation instead.
 */
interface EventSubscriberInterface extends BaseEventSubscriberInterface
{
}
