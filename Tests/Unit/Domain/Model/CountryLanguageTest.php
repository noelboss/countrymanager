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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_Countrymanager_Domain_Model_CountryLanguage.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Typo3 Country Manager
 *
 * @author Noel Bossart <n.company at me dot com>
 */
class Tx_Countrymanager_Domain_Model_CountryLanguageTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Countrymanager_Domain_Model_CountryLanguage
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Countrymanager_Domain_Model_CountryLanguage();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getMenulabelReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMenulabelForStringSetsMenulabel() { 
		$this->fixture->setMenulabel('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMenulabel()
		);
	}
	
	/**
	 * @test
	 */
	public function getFlagReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFlagForStringSetsFlag() { 
		$this->fixture->setFlag('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFlag()
		);
	}
	
	/**
	 * @test
	 */
	public function getCountryReturnsInitialValueForTx_Countrymanager_Domain_Model_Country() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getCountry()
		);
	}

	/**
	 * @test
	 */
	public function setCountryForTx_Countrymanager_Domain_Model_CountrySetsCountry() { 
		$dummyObject = new Tx_Countrymanager_Domain_Model_Country();
		$this->fixture->setCountry($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getCountry()
		);
	}
	
	/**
	 * @test
	 */
	public function getLanguageReturnsInitialValueForTx_Countrymanager_Domain_Model_Language() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getLanguage()
		);
	}

	/**
	 * @test
	 */
	public function setLanguageForTx_Countrymanager_Domain_Model_LanguageSetsLanguage() { 
		$dummyObject = new Tx_Countrymanager_Domain_Model_Language();
		$this->fixture->setLanguage($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getLanguage()
		);
	}
	
}
?>