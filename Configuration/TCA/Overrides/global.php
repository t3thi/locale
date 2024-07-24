<?php

declare(strict_types=1);

use B13\Locale\Database\LocalizableTableProvider;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') || die();

$provider = GeneralUtility::makeInstance(LocalizableTableProvider::class);
$localizableTables = $provider->getAllLocalizableTables();
foreach ($localizableTables as $table) {
    ExtensionManagementUtility::addTCAcolumns($table, [
        'sys_locale' => [
            'label'
        ]
    ]);
    ExtensionManagementUtility::addFieldsToPalette($table, 'language', 'sys_locale');
}
