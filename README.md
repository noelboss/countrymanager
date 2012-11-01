# Typo3 Country Manager
Managing countries and languages was never an easy task with Typo3. Typo3 Country Manager aims to fix this.


## Installation
1. Install Extension "static_info_tables"
2. Download and Install Extension "countrymanager"
3. Add both static TypoScripts provieded by the extension to your TypoScript record (section Includes > Include static (from extensions))



## Configuration 
– Use the Constant Editor to configure some important things:
1. Root Page – A country switch will always fallback to this page
2. ID of the Main Country – Used for the automatic ts configuration



### URLs
If you use RealUrl use this configuration instead of the standard one:

	'preVars' => array( 
		array(
			'GETvar' => 'L',
			'lookUpTable' => array(
				'table' => 'sys_language',
				'id_field' => 'uid',
				'alias_field' => 'title',
				'addWhereClause' => ' AND NOT hidden',
				'useUniqueCache' => 1,
				'useUniqueCache_conf' => array(
					'strtolower' => 1,
					'spaceCharacter' => '-',
				),
			),
		),
		/* ... */
	),

If you use coolUri use this configuration instead of the standard one:

	<uriparts>
		<part>
			<parameter>L</parameter>
			<lookindb>
				<to>SELECT title FROM sys_language WHERE uid=$1 AND hidden=0</to>
				<t3conv>1</t3conv>
			</lookindb>
		</part>
		<!-- ... -->
	</uriparts>
	<!-- ... -->
	<paramorder>
		<param>L</param>
	</paramorder>



## Create Website Languages
The translation scheme with Country Manager is different as normal.
For each language for each country you create a sys_language. For Example:

* Generic Page Tree (Template) – sys_language 1 – NOT USED IN FRONTEND
* Switzerland German – sys_language 1
* Switzerland French – sys_language 2
* Switzerland Italian – sys_language 3
* Germany German – sys_language 4
* Germany English – sys_language 5
* US English – sys_language 7

As you see, you no longer have only one language record for one language but multiple; for each country one.
This gives you full flexibility to use a single page tree while still being able to have differing content
or even pages for single countries and even languages.

Create a new record of the type "Website Language".
The title is used as the url and in the backend. I reccommend using something like this:
* Switzerland German: ch-de
* Switzerland French: ch-fr

This results in urls like www.yourpage.com/ch-de/path/to/site



## Create Language Configuration TypoScript
After you have configured your countries, go to the Country Manager Backend module
and checkt the automatically created configuration. Hit the "Update configuration" Button if
everything is fine.

For this to work a static TS templates is automatically included by ext_typoscript_setup.txt
You can still manually include it in your template and if you have to.



## Usage
You can insert 3 different Plugins:

* List of all countries expect the current (countrymanager_countries)
* List of languages of current country (countrymanager_countries)
* Language switch for the current page (countrymanager_languages)

You can also use typoscript:

	page.10 < tt_content.list.20.countrymanager_countries
	page.20 < tt_content.list.20.countrymanager_country
	page.30 < tt_content.list.20.countrymanager_languages



## FAQ
What happens if I change the country?

– You will be directed to the Page with the ID configured by plugin.tx_countrymanager.settings.rootUid

What happenes if I change the language inside the same country

– If possible, you will be directed to the same page just in a different language


## Attribute
Icon World designed by Mateo Zlatar from The Noun Project.

## Issues & Source
Visit https://github.com/noelboss/countrymanager


© 2012 www.noelboss.ch