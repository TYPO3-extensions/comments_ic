<?php
/* $Id: $ */

if (!defined ('TYPO3_MODE')) die('Access denied.');

// Hook to comments for comments closing
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['comments']['closeCommentsAfter'][$_EXTKEY] = 'EXT:comments_ic/class.tx_commentsic_hooks.php:tx_commentsic_hooks->hookFunc';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['comments']['closeCommentsAfter'][$_EXTKEY] = 'EXT:comments_ic/class.tx_commentsic_hooks.php:tx_commentsic_hooks->hookFunc';

?>