<?php

$EM_CONF['irfaq'] = [
    'title' => 'GEN Modern FAQ',
    'description' => 'FAQ frontend plugin with dynamic or static view which will merge and improve functionality of EXT:faq and EXT:faq_plus into a modern look',
    'category' => 'plugin',
    'version' => '3.0.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'php' => '7.2.0-7.4.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ],
    'state' => 'stable',
    'uploadfolder' => false,
    'clearCacheOnLoad' => false,
    'author' => 'Leonie Philine Bitto [Netcreators], Tania Morales [Netcreators], Florian Wessels [Leuchtfeuer]',
    'author_email' => 'extensions@netcreators.com, dev@Leuchtfeuer.com',
    'author_company' => 'Netcreators, Leuchtfeuer Digital Marketing',
    'autoload' => [
        'psr-4' => [
            'Netcreators\\Irfaq\\' => 'Classes',
        ],
    ],
];
