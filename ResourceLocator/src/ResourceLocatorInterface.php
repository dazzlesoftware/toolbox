<?php

/**
 * @package    Toolbox
 *
 * @copyright  (C) 2025 Dazzle Software, LLC. <https://www.dazzlesoftware.org>
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace DazzleSoftware\Toolbox\ResourceLocator;

/**
 * Defines ResourceLocatorInterface.
 *
 * @package DazzleSoftware\Toolbox\ResourceLocator
 * @author Dazzle Software
 * @license GNU/GPLv3
 */
interface ResourceLocatorInterface
{
    /**
     * Alias for findResource()
     *
     * @param string $uri
     * @return string|bool
     */
    public function __invoke($uri);

    /**
     * Returns true if uri is resolvable by using locator.
     *
     * @param string $uri
     * @return bool
     */
    public function isStream($uri);

    /**
     * @param string $uri
     * @param bool $absolute
     * @param bool $first
     * @return string|false
     */
    public function findResource($uri, $absolute = true, $first = false);

    /**
     * @param string $uri
     * @param bool $absolute
     * @param bool $all
     * @return array
     */
    public function findResources($uri, $absolute = true, $all = false);
}
