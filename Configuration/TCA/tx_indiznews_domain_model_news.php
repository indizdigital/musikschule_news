<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:indiz_news/Resources/Private/Language/locallang_db.xlf:tx_indiznews_domain_model_news',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'security' => [
            'ignorePageTypeRestriction' => true
        ],
        'searchFields' => 'title,teaser,bodytext,href',
        'iconfile' => 'EXT:indiz_news/Resources/Public/Icons/tx_indiznews_domain_model_news.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'title, teaser, bodytext, image, href, pdf,category, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_indiznews_domain_model_news',
                'foreign_table_where' => 'AND {#tx_indiznews_domain_model_news}.{#pid}=###CURRENT_PID### AND {#tx_indiznews_domain_model_news}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => time(),
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:indiz_news/Resources/Private/Language/locallang_db.xlf:tx_indiznews_domain_model_news.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'teaser' => [
            'exclude' => true,
            'label' => 'LLL:EXT:indiz_news/Resources/Private/Language/locallang_db.xlf:tx_indiznews_domain_model_news.teaser',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'bodytext' => [
            'exclude' => true,
            'label' => 'LLL:EXT:indiz_news/Resources/Private/Language/locallang_db.xlf:tx_indiznews_domain_model_news.bodytext',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],

        ],
        'image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:indiz_news/Resources/Private/Language/locallang_db.xlf:tx_indiznews_domain_model_news.image',
            'config' => 
            [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'image',
                    'tablenames' => 'tx_indiznews_domain_model_news',
                    'table_local' => 'sys_file',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
            ],

        ],
        'href' => [
            'exclude' => true,
            'label' => 'LLL:EXT:indiz_news/Resources/Private/Language/locallang_db.xlf:tx_indiznews_domain_model_news.href',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
            ]
        ],
        'pdf' => [
            'exclude' => true,
            'label' => 'LLL:EXT:indiz_news/Resources/Private/Language/locallang_db.xlf:tx_indiznews_domain_model_news.pdf',
            'config' => 
            [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => ['pdf'],
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'pdf',
                    'tablenames' => 'tx_indiznews_domain_model_news',
                    'table_local' => 'sys_file',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
            ],

        ],
        'category' => [
            'exclude' => true,
            'label' => 'LLL:EXT:indiz_news/Resources/Private/Language/locallang_db.xlf:tx_indiznews_domain_model_news.category',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_indiznews_domain_model_category',
                'foreign_table_where' => 'AND tx_indiznews_domain_model_category.sys_language_uid IN (0,-1)',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 10,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],

    ],
];
