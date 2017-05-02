DROP DATABASE IF EXISTS shopping;
CREATE DATABASE shopping;
USE shopping;
CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(64) NOT NULL default '',
    pass varchar(255) NOT NULL default '',
    registered datetime NOT NULL default '0000-00-00 00:00:00',
    PRIMARY KEY (id),
    UNIQUE KEY (username)
);
CREATE TABLE inventory (
    shopper_id int(11) NOT NULL AUTO_INCREMENT,
    item varchar(64) NOT NULL DEFAULT '',
    quantity int(11),
    PRIMARY KEY (shopper_id)
);
CREATE TABLE cart (
    user_id int(11) NOT NULL,
    item_id varchar(64) NOT NULL,
    quant int(11),
    username varchar(64) NOT NULL
    
);
