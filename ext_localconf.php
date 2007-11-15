<?php
/* $Id: $ */

if (!defined ('TYPO3_MODE')) die('Access denied.');

// Hook to comments for comments closing
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['comments/pi1/class.tx_comments_pi1.php']['tx_ttnews'] = 'EXT:comments_ic/class.tx_commentsic_hooks.php:tx_commentsic_hooks->ttNewsHook';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['comments/pi1/class.tx_comments_pi1.php']['tx_commerce_products'] = 'EXT:comments_ic/class.tx_commentsic_hooks.php:tx_commentsic_hooks->commerceProductHook';
?>