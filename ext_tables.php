<?php
defined('TYPO3_MODE') || die;

call_user_func(
    function ($extensionKey) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_irfaq_q');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_irfaq_cat');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_irfaq_expert');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('options.saveDocNew.tx_irfaq_q=1');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('options.saveDocNew.tx_irfaq_cat=1');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('options.saveDocNew.tx_irfaq_expert=1');

        //listing FAQ in Web->Page view
        $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tx_irfaq_q'][0] = [
            'fList' => 'q,a,q_from,expert',
            'icon' => true
        ];

        // Core DataHandler hooks for managing related entries
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][$extensionKey]
            = \Netcreators\Irfaq\System\Backend\DataHandling\RelatedQuestionsDataHandler::class;
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][$extensionKey]
            = \Netcreators\Irfaq\System\Backend\DataHandling\RelatedQuestionsDataHandler::class;

        // Backend Page Module hook
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['irfaq_pi1'][]
            = \Netcreators\Irfaq\System\Backend\PageModule\ExtensionSummaryProvider::class.'->getExtensionSummary';


        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        $iconRegistry->registerIcon(
            'tcarecords-pages-contains-irfaq',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            [
                'source' => 'EXT:irfaq/Resources/Public/Icons/icon_tx_irfaq_sysfolder.gif'
            ]
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            sprintf('@import \'EXT:%s/Configuration/TSconfig/Page/ContentElementWizard/setup.tsconfig\'', $extensionKey)
        );

    }, 'irfaq'
);
