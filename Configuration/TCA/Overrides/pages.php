<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'typo3trainingsitepackagebuilder';

    /**
     * Default PageTS for Typo3trainingsitepackagebuilder
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'TYPO3TrainingSitepackageBuilder'
    );
});
