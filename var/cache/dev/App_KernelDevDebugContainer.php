<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE1nsVa7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE1nsVa7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE1nsVa7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE1nsVa7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerE1nsVa7\App_KernelDevDebugContainer([
    'container.build_hash' => 'E1nsVa7',
    'container.build_id' => '61ad29a3',
    'container.build_time' => 1694461070,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE1nsVa7');
