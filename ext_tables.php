<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Customize Speciality Local');

# Add page TSConfig
$pageTsConfig = \TYPO3\CMS\Core\Utility\GeneralUtility::getUrl(
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TsConfig/Page/config.ts');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig($pageTsConfig);

# Add user TSConfig
$userTsConfig = \TYPO3\CMS\Core\Utility\GeneralUtility::getUrl(
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TsConfig/User/config.ts');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig($userTsConfig);

?>
