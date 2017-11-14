<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/guilherme/Documentos/grav-receptar-portfolio/user/plugins/generator/blueprints.yaml',
    'modified' => 1510624017,
    'data' => [
        'name' => 'Generator',
        'version' => '0.1.0',
        'description' => 'Turn Grav into a Static Site Generator',
        'icon' => 'plug',
        'author' => [
            'name' => 'CTSD'
        ],
        'homepage' => 'https://github.com/ctsd/grav-gassg',
        'keywords' => 'grav, plugin, SSG, generator',
        'bugs' => 'https://github.com/ctsd/grav-gassg/issues',
        'docs' => 'https://github.com/ctsd/grav-gassg/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'destination_folder' => [
                    'type' => 'text',
                    'label' => 'Destination folder'
                ],
                'destination_domain' => [
                    'type' => 'text',
                    'label' => 'Destination domain'
                ],
                'exclude' => [
                    'type' => 'textarea',
                    'label' => 'Folder names to exclude'
                ],
                'include' => [
                    'type' => 'textarea',
                    'label' => 'Folder names to include'
                ],
                'cache_manifest' => [
                    'type' => 'toggle',
                    'default' => 'off',
                    'label' => 'Generate a cache manifest file',
                    'options' => [
                        'on' => 'On',
                        'off' => 'Off'
                    ]
                ]
            ]
        ]
    ]
];
