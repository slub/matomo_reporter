#
# Table structure for table 'tx_matomoreporter_domain_model_subscriber'
#
CREATE TABLE tx_matomoreporter_domain_model_subscriber (

	name varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	maildays varchar(255) DEFAULT '' NOT NULL,
	websites text NOT NULL,
	collections int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_matomoreporter_domain_model_websites'
#
CREATE TABLE tx_matomoreporter_domain_model_websites (

	name varchar(255) DEFAULT '' NOT NULL,
	visits int(11) unsigned DEFAULT '0'

);

#
# Table structure for table 'tx_matomoreporter_domain_model_collections'
#
CREATE TABLE tx_matomoreporter_domain_model_collections (

	subscriber int(11) unsigned DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	visits int(11) unsigned DEFAULT '0'

);

#
# Table structure for table 'tx_matomoreporter_domain_model_visits'
#
CREATE TABLE tx_matomoreporter_domain_model_visits (

	month date DEFAULT NULL,
	unique_visitors int(11) DEFAULT '0' NOT NULL,
	page_views int(11) DEFAULT '0' NOT NULL

);
