create database car_shop;

SET time_zone = "+07:00";

CREATE TABLE `admin` (
    `id` int(10) UNSIGNED NOT NULL auto_increment primary key,
    `username` varchar(30),
    `name` varchar(50) NOT NULL,
    `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `product` (
    `id` int(10) UNSIGNED NOT NULL auto_increment primary key,
    `brand` varchar(50) NOT NULL,
    `year` varchar(10) NOT NULL,
    `kilometer` varchar(50) NOT NULL,
    `description` varchar(4096) NOT NULL,
    `imgName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;