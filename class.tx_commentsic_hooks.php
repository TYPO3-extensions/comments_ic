<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2007 Dmitry Dulepov (dmitry@typo3.org)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
* class.tx_commentsic_hooks.php
*
* Commenting system hooks.
*
* $Id: $
*
* @author Dmitry Dulepov <dmitry@typo3.org>
*/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 */

/**
 * Commenting system hooks. Each hook receives the following in <code>$params</code>:
 * <ul>
 * 	<li><code>uid</code> - uid of the item</li>
 * </ul>
 * Each hook returns time when commenting should be stopped. Thus 0 disables commenting and
 * <code>PHP_INT_MAX</code> means there is no limit.
 *
 * @author Dmitry Dulepov <dmitry@typo3.org>
 *
 */
class tx_commentsic_hooks {
	/**
	 * Provides comment closing date to comments extension for various extensions
	 *
	 * @param	array	$params	Parameters to the function
	 * @param	tx_comments_pi1	$pObj	Parent object
	 * @return	mixed	Closing timestamp or false if unknown
	 * @see	tx_comments_pi1::isCommentingClosed()
	 */
	function hookFunc(&$params, &$pObj) {
		$result = false;
		switch ($params['table']) {
			case 'tt_news':
			case 'tx_commerce_products':
				$result = $this->getCloseTime($params['table'], $params['uid'], $pObj->cObj);
				break;
		}
		return $result;
	}

	/**
	 * Gets closing time from a record
	 *
	 * @param	string	$table	Table name
	 * @param	int	$uid	UID of the record
	 * @param	tslib_cObj	$cObj	COBJECT
	 * @return	mixed	Closing timestamp or false if unknown
	 */
	private function getCloseTime($table, $uid, &$cObj) {
		$result = false;
		$recs = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows('tx_commentsic_disable,tx_commentsic_closetime',
					$table, 'uid=' . intval($uid) . $cObj->enableFields($table));
		if (count($recs)) {
			$result = $recs[0]['tx_commentsic_disable'] ? 0 :
							($recs[0]['tx_commentsic_closetime'] ? $recs[0]['tx_commentsic_closetime'] : PHP_INT_MAX);
		}
		return $result;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/comments_ic/class.tx_commentsic_hooks.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/comments_ic/class.tx_commentsic_hooks.php']);
}

?>