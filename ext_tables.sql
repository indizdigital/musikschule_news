CREATE TABLE tx_indiznews_domain_model_news (
	title varchar(255) NOT NULL DEFAULT '',
	teaser text NOT NULL DEFAULT '',
	bodytext text,
	image int(11) unsigned NOT NULL DEFAULT '0',
	href varchar(255) NOT NULL DEFAULT '',
	pdf int(11) unsigned NOT NULL DEFAULT '0',
	category varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_indiznews_domain_model_category (
	title varchar(255) NOT NULL DEFAULT ''
);
