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
class Tx_Countrymanager_Controller_BackendController extends Tx_Extbase_MVC_Controller_ActionController {

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
	
	public function initializeAction() {
        if(TYPO3_MODE === 'BE') {
            $configurationManager = t3lib_div::makeInstance('Tx_Extbase_Configuration_BackendConfigurationManager');
            $settings = $configurationManager->getConfiguration(
                $this->request->getControllerExtensionName(),
                $this->request->getPluginName()
            );
			$this->settings = $settings['settings'];
        }
		else {
			die('No Access Outside BE!');
		}
    }

	/**
	 * action updatetyposcript
	 *
	 * @return void
	 */
	public function updatetyposcriptAction() {
		$args = $this->request->getArguments();
		if(isset($args['config'])){
			$tsfile = PATH_site."typo3conf/ext/countrymanager/Configuration/TypoScript/AutomaticLanguageConfiguration/setup.txt";
			if(t3lib_div::writeFile( $tsfile , $args['config'])){
				$this->flashMessages->add('TypoScript successfully writen written. Make sure to add the static TS template "Typo3 Country Manager – Automatic Language Configuration" to your master-template.');
			} else {
				$this->flashMessages->add('TypoScript could not be written.');
			}
			;
		}
		
		$countries = $this->countryLanguageRepository->findAll();
		$this->view->assign('content_fallback', $this->settings['sys_language_mode'] == 'content_fallback' ? true : false);
		if(isset($this->settings['defaultCountryUid'])){
			$this->view->assign('defaultCountry', $this->countryLanguageRepository->findByUid(intval($this->settings['defaultCountryUid'])));
		}
		$this->view->assign('countries', $countries);
		//$this->view->assign('debug', $countries);
	}

}
?>