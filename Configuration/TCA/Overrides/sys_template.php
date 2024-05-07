<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'typo3trainingsitepackagebuilder';

    /**
     * Default TypoScript for Typo3trainingsitepackagebuilder
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'TYPO3 Training Sitepackage-Builder'
    );
});
