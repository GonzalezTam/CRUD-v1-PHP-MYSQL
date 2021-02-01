CREATE DATABASE cruddatabase;
USE cruddatabase;
CREATE TABLE usuarios 
( 
    id int(10) not null auto_increment,
    usuario varchar (50) not null,
    contraseña varchar(50) not null,
    email varchar(50) not null,
    telefono varchar(15) not null,
    pais_residencia varchar(25) not null,
    PRIMARY KEY (id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;