Admission Portal
------------------

Undergraduate Final year project on building the admission's module for an ERP system being developed for the academic institution.

Logs:
-----
> Project Initiated: 12/05/2015
> Work in Progress.

DB Init Code
------------
1. Create Table.

CREATE TABLE `users` (
 `id` mediumint(4) NOT NULL AUTO_INCREMENT,
 `username` varchar(10) NOT NULL,
 `password` varchar(100) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE `students` (
 `id` mediumint(4) NOT NULL AUTO_INCREMENT,
 `uid` mediumint(4) NOT NULL,
 `email` varchar(60) NOT NULL,
 `fname` varchar(30) NOT NULL,
 `lname` varchar(30) NOT NULL,
 `gname` varchar(60),
 `stream` varchar(3) NOT NULL,
 `verified` boolean NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

2. Insert admin user.

INSERT INTO users (username, password) VALUES ('bob', MD5('supersecret'));

3. Create user.

CREATE USER 'dbmon'@'localhost' IDENTIFIED BY 'dbmon';
GRANT ALL PRIVILEGES ON admissiondb.* TO 'dbmon'@'localhost';
FLUSH PRIVILEGES;
