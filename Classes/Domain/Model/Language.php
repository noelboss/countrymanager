<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Noel Bossart <n.company at me dot com>, www.noelboss.ch
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
class Tx_Countrymanager_Domain_Model_Language extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Language in English
	 *
	 * @var string
	 */
	protected $lgnameen;

	/**
	 * Language in Local Language
	 *
	 * @var string
	 */
	protected $lgnamelocal;

	/**
	 * Language ISO Code
	 *
	 * @var string
	 */
	protected $lgiso;

	/**
	 * Returns the lgnameen
	 *
	 * @return string $lgnameen
	 */
	public function getLgnameen() {
		return $this->lgnameen;
	}

	/**
	 * Sets the lgnameen
	 *
	 * @param string $lgnameen
	 * @return void
	 */
	public function setLgnameen($lgnameen) {
		$this->lgnameen = $lgnameen;
	}

	/**
	 * Returns the lgiso
	 *
	 * @return string $lgiso
	 */
	public function getLgiso() {
		return strtolower($this->lgiso);
	}
	
	/**
	 * Returns the lgiso in Uppercase
	 *
	 * @return string $lgisoupper
	 */
	public function getLgisoupper() {
		return $this->lgiso;
	}

	/**
	 * Sets the lgiso
	 *
	 * @param string $lgiso
	 * @return void
	 */
	public function setLgiso($lgiso) {
		$this->lgiso = $lgiso;
	}

	/**
	 * Returns the lgnamelocal
	 *
	 * @return string $lgnamelocal
	 */
	public function getLgnamelocal() {
		return $this->lgnamelocal;
	}

	/**
	 * Sets the lgnamelocal
	 *
	 * @param string $lgnamelocal
	 * @return void
	 */
	public function setLgnamelocal($lgnamelocal) {
		$this->lgnamelocal = $lgnamelocal;
	}

}
?>