<?php

/**
 * @package    Toolbox
 *
 * @copyright  (C) 2025 Dazzle Software, LLC. <https://www.dazzlesoftware.org>
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace DazzleSoftware\Toolbox\ArrayTraits;

/**
 * Defines Export interface.
 *
 * @package DazzleSoftware\Toolbox\ArrayTraits
 * @author Dazzle Software <support@dazzlesoftware.org>
 * @license GNU/GPLv3
 */
interface ExportInterface
{
    /**
     * Convert object into an array.
     *
     * @return array
     */
    public function toArray();

    /**
     * Convert object into YAML string.
     *
     * @param int $inline
     * @param int $indent
     * @return string
     */
    public function toYaml($inline = 3, $indent = 2);

    /**
     * Convert object into JSON string.
     *
     * @return string
     */
    public function toJson();
}
