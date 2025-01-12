<?php

/**
 * @package    Toolbox
 *
 * @copyright  (C) 2025 Dazzle Software, LLC. <https://www.dazzlesoftware.org>
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

use PHPUnit\Framework\TestCase;
use DazzleSoftware\Toolbox\Session\Message;

class SessionMessageTest extends TestCase
{

    public function testCreation()
    {
        $message = new Message;
        $this->assertTrue(true);
    }
}
