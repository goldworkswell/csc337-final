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
