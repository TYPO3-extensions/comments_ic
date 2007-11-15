<?php

########################################################################
# Extension Manager/Repository config file for ext: "comments_ic"
#
# Auto generated 15-11-2007 12:56
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Comments: individual closing',
	'description' => 'Adds individual closing of comments for some records',
	'category' => 'fe',
	'author' => 'Dmitry Dulepov',
	'author_email' => 'dmitry@typo3.org',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'tt_news,tx_commerce_products',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'php' => '5.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'tt_news' => '',
			'comments' => '',
		),
	),
	'_md5_values_when_last_written' => 'a:7:{s:9:"ChangeLog";s:4:"c3c9";s:29:"class.tx_commentsic_hooks.php";s:4:"acc0";s:12:"ext_icon.gif";s:4:"ee94";s:17:"ext_localconf.php";s:4:"0c27";s:14:"ext_tables.php";s:4:"ac74";s:14:"ext_tables.sql";s:4:"9a75";s:16:"locallang_db.xml";s:4:"705d";}',
	'suggests' => array(
	),
);

?>