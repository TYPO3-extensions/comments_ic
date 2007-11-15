<?php

########################################################################
# Extension Manager/Repository config file for ext: "comments_ic"
#
# Auto generated 15-11-2007 11:34
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
			'php' => '5.0.0-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'tt_news' => '',
			'comments' => '',
		),
	),
	'_md5_values_when_last_written' => 'a:8:{s:9:"ChangeLog";s:4:"0a42";s:10:"README.txt";s:4:"ee2d";s:12:"ext_icon.gif";s:4:"1bdc";s:14:"ext_tables.php";s:4:"25aa";s:14:"ext_tables.sql";s:4:"da71";s:16:"locallang_db.xml";s:4:"68e3";s:19:"doc/wizard_form.dat";s:4:"2e0d";s:20:"doc/wizard_form.html";s:4:"fba8";}',
);

?>