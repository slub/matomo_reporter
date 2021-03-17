<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Slub.MatomoReporter',
                'tools', // Make module a submodule of 'tools'
                'dashboard', // Submodule key
                '', // Position
                [
                    'Subscriber' => 'list, show, new, create, edit, update, delete','Websites' => 'list, show',
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:matomo_reporter/Resources/Public/Icons/user_mod_dashboard.svg',
                    'labels' => 'LLL:EXT:matomo_reporter/Resources/Private/Language/locallang_dashboard.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('matomo_reporter', 'Configuration/TypoScript', 'SLUB Matomo Reporter');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_matomoreporter_domain_model_subscriber', 'EXT:matomo_reporter/Resources/Private/Language/locallang_csh_tx_matomoreporter_domain_model_subscriber.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_matomoreporter_domain_model_subscriber');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_matomoreporter_domain_model_websites', 'EXT:matomo_reporter/Resources/Private/Language/locallang_csh_tx_matomoreporter_domain_model_websites.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_matomoreporter_domain_model_websites');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_matomoreporter_domain_model_collections', 'EXT:matomo_reporter/Resources/Private/Language/locallang_csh_tx_matomoreporter_domain_model_collections.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_matomoreporter_domain_model_collections');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_matomoreporter_domain_model_visits', 'EXT:matomo_reporter/Resources/Private/Language/locallang_csh_tx_matomoreporter_domain_model_visits.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_matomoreporter_domain_model_visits');

    }
);
