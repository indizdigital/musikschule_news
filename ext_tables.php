<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_indiznews_domain_model_news', 'EXT:indiz_news/Resources/Private/Language/locallang_csh_tx_indiznews_domain_model_news.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_indiznews_domain_model_news');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_indiznews_domain_model_category', 'EXT:indiz_news/Resources/Private/Language/locallang_csh_tx_indiznews_domain_model_category.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_indiznews_domain_model_category');

    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['indiznews_news'] = 'pi_flexform';
     \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('indiznews_news', 'FILE:EXT:indiz_news/Configuration/Flexform/flexform.xml');
})();
