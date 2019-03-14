/*
Created		11.4.2018
Modified		11.4.2018
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/




Create table users (
	id Int NOT NULL AUTO_INCREMENT,
	first_name Varchar(50) NOT NULL,
	last_name Varchar(50) NOT NULL,
	email Varchar(100) NOT NULL,
	pass Varchar(40) NOT NULL,
	avatar Varchar(255),
 Primary Key (id)) ENGINE = InnoDB;

Create table posts (
	id Int NOT NULL AUTO_INCREMENT,
	user_id Int NOT NULL,
	title Varchar(100) NOT NULL,
	content Text NOT NULL,
	date_add Timestamp NOT NULL,
 Primary Key (id)) ENGINE = InnoDB;

Create table comments (
	id Int NOT NULL AUTO_INCREMENT,
	content Text NOT NULL,
	date_add Timestamp NOT NULL,
	user_id Int NOT NULL,
	post_id Int NOT NULL,
 Primary Key (id)) ENGINE = InnoDB;






Alter table comments add Foreign Key (user_id) references users (id) on delete  restrict on update  restrict;
Alter table posts add Foreign Key (user_id) references users (id) on delete  restrict on update  restrict;
Alter table comments add Foreign Key (post_id) references posts (id) on delete  restrict on update  restrict;



