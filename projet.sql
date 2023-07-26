-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 26 juil. 2023 à 13:48
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'Pantalon', 19.99, 'Eh oui voila un pantalon', 'pant1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tel` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`, `tel`) VALUES
(3, 'regerg', 'Ethan', 'ergerg@egger.fr', '$argon2id$v=19$m=65536,t=4,p=1$aE4wQ0hDMHpZNmNhTTZ4MA$nY5rPKThMmQueB74DEo/NIwTGPdgC8UMQZKT00X/Gkw', 606060606),
(4, 'Nicolle', 'Ethan', 'efzezfxsf@dfsksfe.fr', '$argon2id$v=19$m=65536,t=4,p=1$NEg4czhSbFRRSFlneUxkdw$pZbW2mXJFzw954WehOTmqGWakzyP7TZLNvc6DLxpYGE', 606060606),
(5, 'dfgdfgdf', 'dfgdfsg', 'dfgdfg@glkdfg.fr', '$argon2id$v=19$m=65536,t=4,p=1$MDRIMnBUdWhvU0lZSGxvQw$fxMsmyRcEcLz3ZNhpPkrXy/G26A4klt2YWjIP9pZPos', 848394938),
(6, 'ezfklklksd', 'ezfzef', 'zeazefzef@kzekfk.fr', '$argon2id$v=19$m=65536,t=4,p=1$dlQ3SXlnSEQ4dFM2N3BoRA$LOCrVpTIBEZcosJ4bMmWIqKVy76R2hf3FQtlZQP6en4', 2147483647),
(7, 'fzefzef', 'zefzefzefez', 'zefzefzef@adisiida.fr', '$argon2id$v=19$m=65536,t=4,p=1$ekhwbEpMWlllLkd1M2hmNw$MmFPXTVFNvTmUWDWLX+KNsnsOe8nmOp77hX8uTAlMJs', 606060606),
(8, 'erjzjfj', 'ejzejfr', 'test@testee.fr', '$argon2id$v=19$m=65536,t=4,p=1$azFSejFFeWs2Nm5XZ0Njbw$2v6t0YP0OhKibjis1vSQFlN+3h6U10lejmKQ3pd/irs', 606060606);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
