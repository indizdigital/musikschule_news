<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'IndizNews',
        'News',
        [
            \Indiz\IndizNews\Controller\NewsController::class => 'list, show',
            \Indiz\IndizNews\Controller\CategoryController::class => 'list'
        ],
        // non-cacheable actions
        [
            \Indiz\IndizNews\Controller\NewsController::class => 'list,show',
            \Indiz\IndizNews\Controller\CategoryController::class => ''
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    news {
                        iconIdentifier = indiz_news-plugin-news
                        title = LLL:EXT:indiz_news/Resources/Private/Language/locallang_db.xlf:tx_indiz_news_news.name
                        description = LLL:EXT:indiz_news/Resources/Private/Language/locallang_db.xlf:tx_indiz_news_news.description
                        tt_content_defValues {
                            CType = list
                            list_type = indiznews_news
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
