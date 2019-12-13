create database fpm;

use fpm;

create table profile (
    gmail varchar(50) primary key,
    sno int unique not null,
	name varchar(100) not null,
    designation varchar(100) not null,
    department varchar(100) not null,
    dob date not null,
	qualification varchar(300) not null,
    doj date not null,
    password varchar(50) not null,
   phno varchar(15) not null
);

describe profile;

create table experience (
    gmail varchar(50) primary key,
    previous_exp int default 0,
	teaching_exp int default 0,
	research_exp int default 0,
	industry_exp int default 0,
	other_exp varchar(300),
    foreign key(gmail) references profile(gmail)
);

describe experience;

create table specialization(
	gmail varchar(50) primary key,
	area_of_specialization varchar(300),
	UG varchar(300),
	PG varchar(300),
	foreign key(gmail) references profile(gmail)
);

describe specialization;

create table membership(
	gmail varchar(50) primary key,
	field_of_membership varchar(100),
	foreign key(gmail) references profile(gmail)
);

describe membership;

create table role(
	gmail varchar(50) primary key,
	role_of_faculty varchar(50),
	duration int,
	foreign key(gmail) references profile(gmail)
);

describe role;
  
  aaa
