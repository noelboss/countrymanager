#
# Table structure for table 'sys_language'
#
CREATE TABLE sys_language (

	title varchar(255) DEFAULT '' NOT NULL,
	language varchar(255) DEFAULT '' NOT NULL,
	menulabel varchar(255) DEFAULT '' NOT NULL,
	country int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'static_countries'
#
CREATE TABLE static_countries (

);