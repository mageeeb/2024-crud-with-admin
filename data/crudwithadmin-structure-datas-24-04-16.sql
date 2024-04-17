-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 16 avr. 2024 à 15:29
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.3

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `crudwithadmin`
--
DROP DATABASE IF EXISTS `crudwithadmin`;
CREATE DATABASE IF NOT EXISTS `crudwithadmin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `crudwithadmin`;

-- --------------------------------------------------------

--
-- Structure de la table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
                                               `idadministrator` int UNSIGNED NOT NULL AUTO_INCREMENT,
                                               `username` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT 'case sensitive',
                                               `passwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
                                               PRIMARY KEY (`idadministrator`),
                                               UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrator`
--

INSERT INTO `administrator` (`idadministrator`, `username`, `passwd`) VALUES
    (1, 'admin', '$2y$10$2sn4jJ0LgUkGCQHNDfsEPOlybZlC20j.Lk3JCM7lfyAwwrizsEaem');

-- --------------------------------------------------------

--
-- Structure de la table `ourdatas`
--

DROP TABLE IF EXISTS `ourdatas`;
CREATE TABLE IF NOT EXISTS `ourdatas` (
                                          `idourdatas` int UNSIGNED NOT NULL AUTO_INCREMENT,
                                          `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
                                          `ourdesc` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
                                          `latitude` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
                                          `longitude` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
                                          PRIMARY KEY (`idourdatas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ourdatas`
--

INSERT INTO `ourdatas` (`idourdatas`, `title`, `ourdesc`, `latitude`, `longitude`) VALUES
                                                                                       (1, 'test - Chimay', 'mes premières datas', '50.04689', '4.3137284'),
                                                                                       (2, 'Bruxelles', 'On trouve 79 attestations du nom de la localité sous diverses formes jusqu\'en 1219, dont : Bruocsella en 966 (copie du xve siècle, Maastricht) ', '50.8441333', '4.3608051'),
                                                                                       (3, 'The Queen\'s House', 'The Queen\'s House - London', '51.481096', '-0.00375299999');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
