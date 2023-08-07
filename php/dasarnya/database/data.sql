create database nyoba;

CREATE TABLE label1 (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nama` VARCHAR(255) NOT NULL,
    `stok` VARCHAR(255),
    `harga` INT,
    PRIMARY KEY (`id`)
);

create table label2 (
    `id` int not null auto_increment,
    `name` varchar(255) not null,
    `nilai1` int,
    `nilai2` int,
    `na` int,
    primary key(`id`)
);

create table label3 (
    `id` int not null auto_increment,
    `name` varchar(255) not null,
    `berat` int,
    primary key (`id`)
);