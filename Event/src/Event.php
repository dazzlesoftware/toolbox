<?php

namespace DazzleSoftware\Toolbox\Event;

// Compatibility shim for legacy Composer autoload paths during upgrades.

if (!class_exists(__NAMESPACE__ . '\\Event', false)) {
    require_once __DIR__ . '/../../../../../system/src/DazzleSoftware/Toolbox/Event/Event.php';
}
