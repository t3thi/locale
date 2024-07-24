<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Locales',
    'description' => 'Adds native locales to all localizable TCA tables',
    'category' => 'be',
    'author' => 'Benni Mack',
    'author_email' => 'benni@b13.com',
    'state' => 'stable',
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.1.0-13.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
