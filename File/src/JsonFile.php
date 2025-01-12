<?php

/**
 * @package    Toolbox
 *
 * @copyright  (C) 2025 Dazzle Software, LLC. <https://www.dazzlesoftware.org>
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace DazzleSoftware\Toolbox\File;

use function is_array;
use function is_object;

/**
 * Implements Json File reader.
 *
 * @package DazzleSoftware\Toolbox\File
 * @author Dazzle Software
 * @license GNU/GPLv3
 */
class JsonFile extends File
{
    /** @var string */
    protected $extension = '.json';

    /** @var static[] */
    static protected $instances = [];

    /**
     * @param array|null $var
     * @return array
     */
    public function content($var = null)
    {
        /** @var array $content */
        $content = parent::content($var);

        return $content;
    }

    /**
     * Check contents and make sure it is in correct format.
     *
     * @param mixed $var
     * @return array
     */
    protected function check($var)
    {
        if (!(is_array($var) || is_object($var))) {
            throw new \RuntimeException('Provided data is not an array');
        }

        return (array)$var;
    }

    /**
     * Encode contents into RAW string.
     *
     * @param string $var
     * @param int $options
     * @return string
     */
    protected function encode($var, $options = 0)
    {
        return (string)json_encode($var, $options);
    }

    /**
     * Decode RAW string into contents.
     *
     * @param string $var
     * @param bool $assoc
     * @return array
     */
    protected function decode($var, $assoc = false)
    {
        return (array) json_decode($var, $assoc);
    }
}
