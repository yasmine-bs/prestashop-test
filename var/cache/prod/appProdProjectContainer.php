<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerS15c711\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerS15c711/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerS15c711.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerS15c711\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerS15c711\appProdProjectContainer([
    'container.build_hash' => 'S15c711',
    'container.build_id' => 'a533fd9b',
    'container.build_time' => 1669213178,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerS15c711');
