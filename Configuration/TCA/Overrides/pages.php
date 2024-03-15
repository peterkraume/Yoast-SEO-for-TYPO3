<?php
use TYPO3\CMS\Core\Utility\GeneralUtility;
use YoastSeoForTypo3\YoastSeo\Service\TcaService;
use YoastSeoForTypo3\YoastSeo\Utility\YoastUtility;
$llPrefix = 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:';

GeneralUtility::makeInstance(TcaService::class)
    ->addYoastFields(
        'pages',
        YoastUtility::getAllowedDoktypes(null, true)
    );

// Remove description from metatags tab
$GLOBALS['TCA']['pages']['palettes']['metatags']['showitem'] =
    preg_replace('/description(.*,|.*$)/', '', (string) $GLOBALS['TCA']['pages']['palettes']['metatags']['showitem']);
