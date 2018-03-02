<?php
defined('TYPO3_MODE') || die();

$tempColumns = [
    'tx_filefill_enable' => [
        'label' => 'LLL:EXT:filefill/Resources/Private/Language/locallang_db.xlf:sys_file_storage.filefill.enable',
        'displayCond' => 'FIELD:driver:=:Local',
        'config' => [
            'type' => 'check',
            'default' => 0,
        ],
    ],
    'tx_filefill_resources' => [
        'label' => 'LLL:EXT:filefill/Resources/Private/Language/locallang_db.xlf:sys_file_storage.filefill.resources',
        'displayCond' => 'FIELD:driver:=:Local',
        'config' => [
            'type' => 'flex',
            'ds' => [
                'default' => 'FILE:EXT:filefill/Configuration/FlexForms/Resources.xml',
            ],
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_storage', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'sys_file_storage',
    '--div--;LLL:EXT:filefill/Resources/Private/Language/locallang_db.xlf:sys_file_storage.filefill, tx_filefill_enable, tx_filefill_resources',
    '',
    'after:processingfolder'
);