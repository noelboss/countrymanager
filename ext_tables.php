<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Country',
	'Display current country'
);

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Countries',
	'Display list of countries'
);

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Languages',
	'Display list of languages'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/ExtensionConfiguration', 'Typo3 Country Manager – Extension Configuration');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/AutomaticLanguageConfiguration', 'Typo3 Country Manager – Automatic Language Configuration');

$tmp_countrymanager_columns = array(
	'title' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:countrymanager/Resources/Private/Language/locallang_db.xml:tx_countrymanager_domain_model_countrylanguage.title',
		'config' => array(
			'type' => 'input',
			'size' => 15,
			'eval' => 'trim,required'
		),
	),
	'language' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:countrymanager/Resources/Private/Language/locallang_db.xml:tx_countrymanager_domain_model_countrylanguage.language',
		/*'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim,required'
		),*/
		'config' => array(
			'type' => 'group',
			'internal_type' => 'db',
			'allowed' => 'static_languages',
			'size' => '1',
			'maxitems' => '1',
			'minitems' => '1',
			'show_thumbs' => '1',
			'wizards' => array(
				'suggest' => array(
					'type' => 'suggest',
				),
			),
		),
	),
	'menulabel' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:countrymanager/Resources/Private/Language/locallang_db.xml:tx_countrymanager_domain_model_countrylanguage.menulabel',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim,required'
		),
	),
	'country' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:countrymanager/Resources/Private/Language/locallang_db.xml:tx_countrymanager_domain_model_countrylanguage.country',
		/*'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim,required'
		),*/
		
		'config' => array(
			'type' => 'group',
			'internal_type' => 'db',
			'allowed' => 'static_countries',
			'size' => '1',
			'maxitems' => '1',
			'minitems' => '1',
			'show_thumbs' => '1',
			'wizards' => array(
				'suggest' => array(
					'type' => 'suggest',
				),
			),
		),
	),
);

t3lib_extMgm::addTCAcolumns('sys_language',$tmp_countrymanager_columns,1);
t3lib_extMgm::addToAllTCAtypes('sys_language', 'title,language,country,menulabel','','after:title');

?>