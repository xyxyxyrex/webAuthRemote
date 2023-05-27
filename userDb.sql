CREATE TABLE tbl_user (
  user_id int(8) unsigned NOT NULL auto_increment, 
  first_name varchar(180) NOT NULL default '',
  last_name varchar(180) NOT NULL default '',
  user_name varchar(180) NOT NULL default '',
  password varchar(180) NOT NULL default '',
  PRIMARY KEY  (user_id)
) 