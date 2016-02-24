SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS customers (
id int(10) unsigned NOT NULL,
  user_id int(11) NOT NULL,
  user_id_edit int(11) NOT NULL,
  first_letter_name varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  fullname varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  surname varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  phone varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  email varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  near_fullname varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  near_phone varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  address text COLLATE utf8_unicode_ci NOT NULL,
  content text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS migrations (
  migration varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  batch int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO migrations (migration, batch) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_28_162150_create_customers_table', 2),
('2015_11_28_162256_create_works_table', 2);

CREATE TABLE IF NOT EXISTS password_resets (
  email varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  token varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS users (
id int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  email varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  remember_token varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS works (
id int(10) unsigned NOT NULL,
  user_id int(11) NOT NULL,
  user_id_edit int(11) NOT NULL,
  customer_id int(11) NOT NULL,
  title varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  price varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  amount int(11) NOT NULL,
  content text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  date_start date NOT NULL,
  date_end date NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


ALTER TABLE customers
 ADD PRIMARY KEY (id);

ALTER TABLE password_resets
 ADD KEY password_resets_email_index (email), ADD KEY password_resets_token_index (token);

ALTER TABLE users
 ADD PRIMARY KEY (id), ADD UNIQUE KEY users_email_unique (email);

ALTER TABLE works
 ADD PRIMARY KEY (id);


ALTER TABLE customers
MODIFY id int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
ALTER TABLE users
MODIFY id int(10) unsigned NOT NULL AUTO_INCREMENT;
ALTER TABLE works
MODIFY id int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;