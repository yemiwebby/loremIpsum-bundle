<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIcsuxeK\ControllerTestDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIcsuxeK/ControllerTestDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerIcsuxeK.legacy');

    return;
}

if (!\class_exists(ControllerTestDebugProjectContainer::class, false)) {
    \class_alias(\ContainerIcsuxeK\ControllerTestDebugProjectContainer::class, ControllerTestDebugProjectContainer::class, false);
}

return new \ContainerIcsuxeK\ControllerTestDebugProjectContainer(array(
    'container.build_hash' => 'IcsuxeK',
    'container.build_id' => 'f3ea390c',
    'container.build_time' => 1537046432,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerIcsuxeK');
