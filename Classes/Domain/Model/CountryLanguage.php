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
 * @package nbocountrylanguage
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Countrymanager_Domain_Model_CountryLanguage extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
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
	 * Language
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $language;

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
	 * @var string
	 * @validate NotEmpty
	 */
	protected $country;

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
	 * Returns the language
	 *
	 * @return string language
	 */
	public function getLanguage() {
		return $this->language;
	}

	/**
	 * Sets the language
	 *
	 * @param string $language
	 * @return string language
	 */
	public function setLanguage($language) {
		$this->language = $language;
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
	 * @return string $country
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * Sets the country
	 *
	 * @param string $country
	 * @return void
	 */
	public function setCountry($country) {
		$this->country = $country;
	}

}
?>