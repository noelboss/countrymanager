<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Noel Bossart <n.company at me dot com>, noelboss.ch
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package countrymanager
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Countrymanager_Domain_Model_Country extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Country Backend Label
	 * cnshorten
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $cnshorten;

	/**
	 * Country Backend Label
	 * cnshortlocal
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $cnshortlocal;

	/**
	 * Country Backend Label
	 * cntldomain
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $cntldomain;

	/**
	 * Returns the cnshorten
	 *
	 * @return string $cnshorten
	 */
	public function getCnshorten() {
		return $this->cnshorten;
	}

	/**
	 * Sets the cnshorten
	 *
	 * @param string $cnshorten
	 * @return void
	 */
	public function setCnShorten($cnshorten) {
		$this->cnshorten = $cnshorten;
	}

	/**
	 * Returns the cnshortlocal
	 *
	 * @return string $cnshortlocal
	 */
	public function getCnshortlocal() {
		return $this->cnshortlocal;
	}

	/**
	 * Sets the cnshortlocal
	 *
	 * @param string $cnshortlocal
	 * @return void
	 */
	public function setCnshortlocal($cnshortlocal) {
		$this->cnshortlocal = $cnshortlocal;
	}

	/**
	 * Returns the cntldomain
	 *
	 * @return string $cntldomain
	 */
	public function getCntldomain() {
		return $this->cntldomain;
	}

	/**
	 * Sets the cntldomain
	 *
	 * @param string $cntldomain
	 * @return void
	 */
	public function setCntldomain($cntldomain) {
		$this->cntldomain = $cntldomain;
	}

}
?>