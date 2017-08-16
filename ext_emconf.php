<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'GetEnv TypoScript modifier',
    'description' => 'This TYPO3 extension provides a simple way to access environment variables within TypoScript at places where stdWrap is not available.',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-9.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'H4ck3r31\\GetEnvTypoScript\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Oliver Hader',
    'author_email' => 'oliver.hader@typo3.org',
    'author_company' => 'HofHäckerei',
    'version' => '1.0.1',
    'clearcacheonload' => true,
];
