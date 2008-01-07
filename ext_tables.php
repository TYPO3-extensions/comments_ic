<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// New columns
$tempColumns = array (
	'tx_commentsic_disable' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:comments_ic/locallang_db.xml:tx_commentsic_disable',
		'config' => array (
			'type'     => 'check',
			'items'    => array(
				array('', '')
			),
			'default'  => '0'
		)
	),
	'tx_commentsic_closetime' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:comments_ic/locallang_db.xml:tx_commentsic_closetime',
		'displayCond' => 'FIELD:tx_commentsic_disable:=:0',
		'config' => array (
			'type'     => 'input',
			'size'     => '12',
			'max'      => '20',
			'eval'     => 'datetime',
			'checkbox' => '0',
		)
	),
);

// tt_news
if (isset($TCA['tt_news'])) {
	t3lib_div::loadTCA('tt_news');
	t3lib_extMgm::addTCAcolumns('tt_news', $tempColumns, 1);
	t3lib_extMgm::addToAllTCAtypes('tt_news', 'tx_commentsic_disable;;;;1-1-1, tx_commentsic_closetime');
	$TCA['tt_news']['ctrl']['requestUpdate'] = ',tx_commentsic_disable';
}

// tx_commerce_products
if (isset($TCA['tx_commerce_products'])) {
	t3lib_div::loadTCA('tx_commerce_products');
	t3lib_extMgm::addTCAcolumns('tx_commerce_products', $tempColumns, 1);
	t3lib_extMgm::addToAllTCAtypes('tx_commerce_products', 'tx_commentsic_disable;;;;1-1-1, tx_commentsic_closetime');
	$TCA['tx_commerce_products']['ctrl']['requestUpdate'] = ',tx_commentsic_disable';
}
?>