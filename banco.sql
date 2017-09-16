drop database if exists laravel1;

create database laravel1;

use laravel1;

show tables;

select * from pages;
select * from users;


update pages
set user_id = 2 
where id = 4; 


1	Dr. Deven King	stefan.kozey@example.org	$2y$10$1heSN91AJUeZuMaIEKWOCerRNpydNxBXEZUQPBqmJ2L0wD2zhi.ZG	ucXAWBaGAd	2017-09-16 14:09:52	2017-09-16 14:09:52
2	Cornelius Monahan	angus.pouros@example.net	$2y$10$1heSN91AJUeZuMaIEKWOCerRNpydNxBXEZUQPBqmJ2L0wD2zhi.ZG	KQIhoZHPf1	2017-09-16 14:09:52	2017-09-16 14:09:52
3	Angelita Blanda	lucius.reilly@example.net	$2y$10$1heSN91AJUeZuMaIEKWOCerRNpydNxBXEZUQPBqmJ2L0wD2zhi.ZG	6tEZgNRnVB	2017-09-16 14:09:52	2017-09-16 14:09:52