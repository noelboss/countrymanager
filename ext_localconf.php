<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Countries',
	array(
		'CountryLanguage' => 'countries',
		
	),
	// non-cacheable actions
	array(
		'CountryLanguage' => '',
		
	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Country',
	array(
		'CountryLanguage' => 'country',
		
	),
	// non-cacheable actions
	array(
		'CountryLanguage' => '',
		
	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Languages',
	array(
		'CountryLanguage' => 'languages',
		
	),
	// non-cacheable actions
	array(
		'CountryLanguage' => '',
		
	)
);

?>