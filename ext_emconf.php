<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "countrymanager".
 *
 * Auto generated 01-11-2012 00:07
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Typo3 Country Manager',
	'description' => 'Managing countries and languages was never an easy task with Typo3. Typo3 Country Manager aims to fix this. Translating content for different countries with multiple languages becomes flexible and easy.',
	'category' => 'plugin',
	'author' => 'Noel Bossart',
	'author_email' => 'n.company at me dot com',
	'author_company' => 'www.noelboss.ch',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.7-0.0.0',
			'static_info_tables' => '2.3.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:43:{s:12:"ext_icon.gif";s:4:"fadc";s:17:"ext_localconf.php";s:4:"3ca9";s:14:"ext_tables.php";s:4:"0509";s:14:"ext_tables.sql";s:4:"63cb";s:24:"ext_typoscript_setup.txt";s:4:"996f";s:21:"ExtensionBuilder.json";s:4:"d6d2";s:9:"README.md";s:4:"7915";s:40:"Classes/Controller/BackendController.php";s:4:"21e4";s:48:"Classes/Controller/CountryLanguageController.php";s:4:"a028";s:32:"Classes/Domain/Model/Country.php";s:4:"de79";s:40:"Classes/Domain/Model/CountryLanguage.php";s:4:"432e";s:33:"Classes/Domain/Model/Language.php";s:4:"eff5";s:55:"Classes/Domain/Repository/CountryLanguageRepository.php";s:4:"a3d9";s:47:"Classes/Domain/Repository/CountryRepository.php";s:4:"68d6";s:48:"Classes/Domain/Repository/LanguageRepository.php";s:4:"33df";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"9041";s:29:"Configuration/TCA/Country.php";s:4:"c1d8";s:37:"Configuration/TCA/CountryLanguage.php";s:4:"c1d8";s:30:"Configuration/TCA/Language.php";s:4:"c1d8";s:65:"Configuration/TypoScript/AutomaticLanguageConfiguration/setup.txt";s:4:"50b0";s:61:"Configuration/TypoScript/ExtensionConfiguration/constants.txt";s:4:"6166";s:57:"Configuration/TypoScript/ExtensionConfiguration/setup.txt";s:4:"b468";s:40:"Resources/Private/Language/locallang.xml";s:4:"0b44";s:63:"Resources/Private/Language/locallang_countrymanagertsupdate.xml";s:4:"0f06";s:61:"Resources/Private/Language/locallang_csh_static_countries.xml";s:4:"8772";s:61:"Resources/Private/Language/locallang_csh_static_languages.xml";s:4:"a62e";s:57:"Resources/Private/Language/locallang_csh_sys_language.xml";s:4:"8056";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"4f91";s:38:"Resources/Private/Layouts/Default.html";s:4:"c292";s:57:"Resources/Private/Templates/Backend/Updatetyposcript.html";s:4:"7735";s:58:"Resources/Private/Templates/CountryLanguage/Countries.html";s:4:"e364";s:56:"Resources/Private/Templates/CountryLanguage/Country.html";s:4:"19ab";s:58:"Resources/Private/Templates/CountryLanguage/Languages.html";s:4:"226a";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:43:"Resources/Public/Icons/static_countries.gif";s:4:"905a";s:43:"Resources/Public/Icons/static_languages.gif";s:4:"905a";s:39:"Resources/Public/Icons/sys_language.gif";s:4:"905a";s:47:"Tests/Unit/Controller/CountryControllerTest.php";s:4:"6710";s:55:"Tests/Unit/Controller/CountryLanguageControllerTest.php";s:4:"436a";s:48:"Tests/Unit/Controller/LanguageControllerTest.php";s:4:"86bc";s:47:"Tests/Unit/Domain/Model/CountryLanguageTest.php";s:4:"df7d";s:39:"Tests/Unit/Domain/Model/CountryTest.php";s:4:"57df";s:40:"Tests/Unit/Domain/Model/LanguageTest.php";s:4:"b427";}',
);

?>