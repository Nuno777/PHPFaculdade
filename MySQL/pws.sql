create database pws;
use pws;

create table utilizador(
email varchar(30) primary key not null,
nome varchar(50) not null,
pass varchar(150) not null,
foto varchar(250) DEFAULT NULL
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

select * from utilizador;
