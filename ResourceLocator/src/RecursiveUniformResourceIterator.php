<?php

/**
 * @package    Toolbox
 *
 * @copyright  (C) 2025 Dazzle Software, LLC. <https://www.dazzlesoftware.org>
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace DazzleSoftware\Toolbox\ResourceLocator;

use FilesystemIterator;
use RecursiveIterator;

/**
 * Implements recursive iterator over filesystem.
 *
 * @package DazzleSoftware\Toolbox\ResourceLocator
 * @author Dazzle Software
 * @license GNU/GPLv3
 */
class RecursiveUniformResourceIterator extends UniformResourceIterator implements RecursiveIterator
{
    /** @var string|null */
    protected $subPath;

    /**
     * @return RecursiveUniformResourceIterator
     */
    #[\ReturnTypeWillChange]
    public function getChildren()
    {
        $subPath = $this->getSubPathName();

        return (new static($this->getUrl(), $this->flags, $this->locator))->setSubPath($subPath);
    }

    /**
     * @param bool|null $allow_links
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function hasChildren($allow_links = null)
    {
        $allow_links = (bool)($allow_links ?? ($this->flags & FilesystemIterator::FOLLOW_SYMLINKS));

        return $this->isDir() && !$this->isDot() && ($allow_links || !$this->isLink());
    }

    /**
     * @return string|null
     */
    public function getSubPath()
    {
        return $this->subPath;
    }

    /**
     * @return string
     */
    public function getSubPathName()
    {
        return ($this->subPath ? $this->subPath . '/' : '') . $this->getFilename();
    }

    /**
     * @param string $path
     * @return $this
     * @internal
     */
    public function setSubPath($path)
    {
        $this->subPath = $path;

        return $this;
    }
}
