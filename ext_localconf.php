<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Speciality\Hooks\TypoScriptTemplate::getInstance()->addStaticTemplates(array(
	'EXT:' . $_EXTKEY . '/Configuration/TypoScript', // keep loading last
));
