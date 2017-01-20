<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'DotEnv Provider',
    'description' => 'DotEnv Provider',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'H4ck3r31\\Dotenv\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Oliver Hader',
    'author_email' => 'oliver.hader@typo3.org',
    'author_company' => 'HofHäckerei',
    'version' => '1.0.0',
    'clearcacheonload' => true,
];
