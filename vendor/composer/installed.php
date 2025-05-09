<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'october-theme',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => 'da85694d0bea24cd12c815e58852ee1b9ff1deb6',
        'name' => 'october/pensoft-bcubed-theme',
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'dev_requirement' => false,
        ),
        'october/pensoft-bcubed-theme' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'october-theme',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => 'da85694d0bea24cd12c815e58852ee1b9ff1deb6',
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
