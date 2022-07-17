/* Create Database and Table */
create database hasnur_db;
 
use hasnur_db;
 
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `project_name` varchar(100),
  `client` varchar(100),
  `project_leader` varchar(15),
  `progress` int(3),
  `start` date,
  `end` date,
  PRIMARY KEY  (`id`)
);

