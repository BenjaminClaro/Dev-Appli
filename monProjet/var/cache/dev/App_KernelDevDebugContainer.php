<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4WZvePx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4WZvePx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4WZvePx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4WZvePx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4WZvePx\App_KernelDevDebugContainer([
    'container.build_hash' => '4WZvePx',
    'container.build_id' => '8abf81dd',
    'container.build_time' => 1704812230,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container4WZvePx');
