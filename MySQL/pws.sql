create database pws;
use pws;

create table utilizador(
email varchar(30) primary key not null,
nome varchar(50) not null,
pass varchar(150) not null,
foto varchar(250) DEFAULT NULL
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

insert into utilizador (email,nome,pass) value ("admin@gmail.com","administrador","3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2");
select * from utilizador;