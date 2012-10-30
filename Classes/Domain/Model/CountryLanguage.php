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
class Tx_Countrymanager_Domain_Model_CountryLanguage extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Country Backend Label
	 * Flag
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $flag;

	/**
	 * Country Backend Label
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * Country Menu Label
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $menulabel;

	/**
	 * Country
	 *
	 * @var Tx_Countrymanager_Domain_Model_Country
	 */
	protected $country;

	/**
	 * Language
	 *
	 * @var Tx_Countrymanager_Domain_Model_Language
	 */
	protected $language;

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the flag
	 *
	 * @return string $flag
	 */
	public function getFlag() {
		return $this->flag;
	}

	/**
	 * Sets the flag
	 *
	 * @param string $flag
	 * @return void
	 */
	public function setFlag($flag) {
		$this->flag = $flag;
	}

	/**
	 * Returns the menulabel
	 *
	 * @return string $menulabel
	 */
	public function getMenulabel() {
		return $this->menulabel;
	}

	/**
	 * Sets the menulabel
	 *
	 * @param string $menulabel
	 * @return void
	 */
	public function setMenulabel($menulabel) {
		$this->menulabel = $menulabel;
	}

	/**
	 * Returns the country
	 *
	 * @return Tx_Countrymanager_Domain_Model_Country $country
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * Sets the country
	 *
	 * @param Tx_Countrymanager_Domain_Model_Country $country
	 * @return void
	 */
	public function setCountry(Tx_Countrymanager_Domain_Model_Country $country) {
		$this->country = $country;
	}

	/**
	 * Returns the language
	 *
	 * @return Tx_Countrymanager_Domain_Model_Language $language
	 */
	public function getLanguage() {
		return $this->language;
	}

	/**
	 * Sets the language
	 *
	 * @param Tx_Countrymanager_Domain_Model_Language $language
	 * @return void
	 */
	public function setLanguage(Tx_Countrymanager_Domain_Model_Language $language) {
		$this->language = $language;
	}

}
?>