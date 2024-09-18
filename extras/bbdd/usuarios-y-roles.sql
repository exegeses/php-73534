# creación de tablas roles y usuarios

create table roles
(
    idRol tinyint unsigned auto_increment primary key not null,
    rol varchar(30) unique not null
);

insert into roles
    VALUES
        ( default, 'Administrador' ),
        ( default, 'Supervisor' ),
        ( default, 'Usuario' ),
        ( default, 'invitado' );

create table usuarios
(
    idUsuario smallint unsigned auto_increment primary key not null,
    nombre varchar(45) not null,
    apellido varchar(45) not null,
    email varchar(45) unique not null,
    clave varchar(76) not null,
    idRol tinyint unsigned not null,
    foreign key (idRol) references roles (idRol),
    activo boolean default(1) not null
);