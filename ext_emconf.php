<?php

########################################################################
# Extension Manager/Repository config file for ext: "comments_ic"
#
# Auto generated 18-02-2008 14:28
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Comments: individual closing',
	'description' => 'Adds individual closing of comments for tt_news and commerce products. Public free support is provided only through TYPO3 mailing lists! Contact by e-mail for commercial support.',
	'category' => 'fe',
	'author' => 'Netcreators BV',
	'author_email' => 'extensions@netcreators.com',
	'shy' => '',
	'dependencies' => 'comments',
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
	'author_company' => 'Netcreators BV',
	'version' => '1.1.1',
	'constraints' => array(
		'depends' => array(
			'php' => '5.1.0-0.0.0',
			'comments' => '1.3.0-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'tt_news' => '',
			'commerce' => '',
		),
	),
	'_md5_values_when_last_written' => 'a:7:{s:9:"ChangeLog";s:4:"09c2";s:29:"class.tx_commentsic_hooks.php";s:4:"3f3f";s:12:"ext_icon.gif";s:4:"ee94";s:17:"ext_localconf.php";s:4:"f7c2";s:14:"ext_tables.php";s:4:"1086";s:14:"ext_tables.sql";s:4:"9a75";s:16:"locallang_db.xml";s:4:"705d";}',
	'suggests' => array(
	),
);

?>