<?php

/**
 * Extension Manager/Repository config file for ext "typo3trainingsitepackagebuilder".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Training Sitepackage-Builder',
    'description' => 'Exercise for creating a site package extension based on sitepackagebuilder.com',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'NiklasKanthak\\Typo3trainingsitepackagebuilder\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Niklas Kanthak',
    'author_email' => 'niklas.kanthak@online.de',
    'author_company' => 'privat',
    'version' => '1.0.0',
];
