<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQOSKkoW\ControllerTestDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQOSKkoW/ControllerTestDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerQOSKkoW.legacy');

    return;
}

if (!\class_exists(ControllerTestDebugProjectContainer::class, false)) {
    \class_alias(\ContainerQOSKkoW\ControllerTestDebugProjectContainer::class, ControllerTestDebugProjectContainer::class, false);
}

return new \ContainerQOSKkoW\ControllerTestDebugProjectContainer(array(
    'container.build_hash' => 'QOSKkoW',
    'container.build_id' => '67426243',
    'container.build_time' => 1537047919,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerQOSKkoW');