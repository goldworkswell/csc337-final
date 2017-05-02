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
INSERT INTO users (id, username, pass, registered) VALUES (1, "Admin", "1234", now());
CREATE TABLE admin (
    user_id int(11) NOT NULL,
    item_id varchar(64) NOT NULL,
    quant int(11),
    username varchar(64) NOT NULL
);
CREATE TABLE cart (
    user_id int(11) NOT NULL,
    item_id varchar(64) NOT NULL,
    quant int(11),
    username varchar(64) NOT NULL
    
);
