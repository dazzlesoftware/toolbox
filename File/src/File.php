<?php

/**
 * @package    Toolbox
 *
 * @copyright  (C) 2025 Dazzle Software, LLC. <https://www.dazzlesoftware.org>
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace DazzleSoftware\Toolbox\File;

use RuntimeException;

/**
 * Implements Universal File Reader.
 *
 * @package DazzleSoftware\Toolbox\File
 * @author Dazzle Software
 * @license GNU/GPLv3
 */
class File extends AbstractFile
{
    /**
     * Get/set parsed file contents.
     *
     * @param string|null $var
     * @return string
     * @throws RuntimeException
     */
    public function content($var = null)
    {
        /** @var string $content */
        $content = parent::content($var);

        return $content;
    }
}
