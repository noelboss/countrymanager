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
class Tx_Countrymanager_Controller_CountryLanguageController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * countryLanguageRepository
	 *
	 * @var Tx_Countrymanager_Domain_Repository_CountryLanguageRepository
	 */
	protected $countryLanguageRepository;

	/**
	 * languageRepository
	 *
	 * @var Tx_Countrymanager_Domain_Repository_LanguageRepository
	 */
	protected $languageRepository;

	/**
	 * injectCountryLanguageRepository
	 *
	 * @param Tx_Countrymanager_Domain_Repository_CountryLanguageRepository $countryLanguageRepository
	 * @return void
	 */
	public function injectCountryLanguageRepository(Tx_Countrymanager_Domain_Repository_CountryLanguageRepository $countryLanguageRepository) {
		$this->countryLanguageRepository = $countryLanguageRepository;
	}

	/**
	 * injectCountryLanguageRepository
	 *
	 * @param Tx_Countrymanager_Domain_Repository_LanguageRepository $languageRepository
	 * @return void
	 */
	public function injectLanguageRepository(Tx_Countrymanager_Domain_Repository_LanguageRepository $languageRepository) {
		$this->languageRepository = $languageRepository;
	}

	/**
	 * action countries
	 *
	 * @return void
	 */
	public function countriesAction() {
		$countries = $this->countryLanguageRepository->findAll();
		$countryLanguage = $this->countryLanguageRepository->findByUid($GLOBALS['TSFE']->sys_language_uid);
		$this->view->assign('currentCountry', $countryLanguage);
		$this->view->assign('sameCountries', $this->countryLanguageRepository->findByFlag($countryLanguage->getFlag()));
		$this->view->assign('countries', $countries);
		$this->view->assign('settings', $this->settings);
	}

	/**
	 * action country
	 *
	 * @return void
	 */
	public function countryAction() {
		$countryLanguage = $this->countryLanguageRepository->findByUid($GLOBALS['TSFE']->sys_language_uid);
		$this->view->assign('currentCountry', $countryLanguage);
		$this->view->assign('sameCountries', $this->countryLanguageRepository->findByFlag($countryLanguage->getFlag()));
		$this->view->assign('settings', $this->settings);
	}

	/**
	 * action languages
	 *
	 * @return void
	 */
	public function languagesAction() {
		$countries = $this->countryLanguageRepository->findAll();
		$countryLanguage = $this->countryLanguageRepository->findByUid($GLOBALS['TSFE']->sys_language_uid);
		$this->view->assign('currentCountry', $countryLanguage);
		$this->view->assign('sameCountries', $this->countryLanguageRepository->findByFlag($countryLanguage->getFlag()));
		$this->view->assign('settings', $this->settings);
	}


}
?>