create database dbpp20232;
use dbpp20232;

create table tteacher
(
idTeacher char(13) not null,
firstName varchar(70) not null,
surName varchar(40) not null,
primary key(idTeacher)
) engine=innodb;

create table tassistance
(
idAssistance char(13) not null,
idTeacher char(13) not null,
beginDate datetime not null,
endDate datetime null,
status varchar(20) not null,/*En clase, En reunión, Aula de docentes*/
foreign key(idTeacher) references tteacher(idTeacher)
on delete cascade on update cascade,
primary key(idAssistance)
) engine=innodb;

insert into tteacher values('5ece4797eaf5e', 'Kevin Arnold', 'Arias Figueroa');
insert into tassistance values('5ece4797eaf5l', '5ece4797eaf5e', now(), null, 'En clase');
insert into tassistance values('5ece4797eaf5x', '5ece4797eaf5e', '2023-12-20 08:25:00', null, 'En clase');
insert into tassistance values('5ece4797eaf5y', '5ece4797eaf5e', '2024-02-27 08:00:00', null, 'En clase');