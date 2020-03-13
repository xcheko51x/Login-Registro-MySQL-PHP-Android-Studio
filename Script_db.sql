create database loginpruebas;

use loginpruebas;

create table usuarios(
  idUsuario int primary key auto_increment,
  nombre varchar(150) not null,
  usuario varchar(15) not null,
  contrasena varchar(10) not null
);
