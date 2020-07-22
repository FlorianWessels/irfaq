CREATE TABLE tx_irfaq_q_cat_mm (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,

  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,

  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);

CREATE TABLE tx_irfaq_q (
  q tinytext NOT NULL,
  q_from tinytext NOT NULL,
  cat int(11) DEFAULT '0' NOT NULL,
  a text NOT NULL,
  expert int(11) DEFAULT '0' NOT NULL,
  related text NOT NULL,
  related_links text NOT NULL,
  faq_files text NOT NULL,
  enable_ratings tinyint(4) DEFAULT '1' NOT NULL,
  disable_comments int(11) DEFAULT '0' NOT NULL,
  comments_closetime int(11) DEFAULT '0' NOT NULL,
);

CREATE TABLE tx_irfaq_cat (
  title tinytext NOT NULL,
  shortcut tinytext NOT NULL,
);

CREATE TABLE tx_irfaq_expert (
  name tinytext NOT NULL,
  email tinytext NOT NULL,
  url tinytext NOT NULL,
);
