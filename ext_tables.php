<?php
defined('TYPO3') || die();

(static function() {
    

    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['indiznews_news'] = 'pi_flexform';
     \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('indiznews_news', 'FILE:EXT:indiz_news/Configuration/Flexform/flexform.xml');
})();
