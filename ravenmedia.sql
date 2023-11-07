-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 juin 2022 à 21:49
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ravenmedia`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `idAdmin` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `motPass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `adresseLivraison` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `motPasse` varchar(100) NOT NULL,
  `telephone` int(11) NOT NULL,
  `telephoneAdresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`, `adresse`, `adresseLivraison`, `ville`, `pays`, `email`, `motPasse`, `telephone`, `telephoneAdresse`) VALUES
(1, 'Karam', 'Karima', 'Almamounia Meknes', 'Albaraka Fes', 'Fes', 'Maroc', 'karima@gmail.com', 'karima123', 669463254, 698521204),
(2, 'Souaidi', 'Chayma', 'Hay assalam Casablanca ', 'Hay assalam Casablanca ', 'Casablanca ', 'Maroc', 'souaidichayma@gmail.com', 'chayma123', 685463254, 689855544),
(3, 'lamkhantar', 'Salma', 'Fatima Lfihria Tadla', 'Fatima Lfihria Tadla', 'Tadla', 'Maroc', 'salma@gmail.com', 'salma123', 147852, 632549871),
(4, 'Samih', 'Samiha', 'Almassira Marrakech', 'Almanara Marrakech', 'Marrakech', 'Maroc', 'samiha@gmail.com', 'samiha123', 147852, 89855544);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(11) NOT NULL,
  `dateCommande` date NOT NULL,
  `adresseLivraison` varchar(100) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idCommande`, `dateCommande`, `adresseLivraison`, `idClient`, `idProduit`) VALUES
(1, '2022-06-07', 'chichaoua elMassira 137', 2, 15),
(3, '2022-06-08', 'chichaoua 123', 3, 7),
(9, '2022-06-02', 'Almamounia Meknes', 1, 7),
(11, '2022-06-02', 'Almamounia Meknes', 1, 7);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sujet` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`nom`, `email`, `sujet`, `message`) VALUES
('Ali', 'ali@gamil.com', 'Question', 'y a t-il une Nike air force jaune dans votre store ?!');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `idPanier` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `taille` varchar(30) NOT NULL,
  `numero` int(30) NOT NULL,
  `total` int(30) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`idPanier`, `quantite`, `taille`, `numero`, `total`, `idClient`, `idProduit`) VALUES
(11, 0, 'taille', 0, 0, 2, 12),
(13, 2, 'l', 0, 0, 2, 2),
(23, 4, 'l', 0, 0, 4, 2),
(24, 1, 'l', 0, 0, 4, 39),
(25, 1, 'null', 39, 0, 4, 31),
(26, 1, 'null', 0, 0, 1, 19),
(27, 1, 's', 0, 0, 3, 1),
(28, 1, 'xl', 0, 0, 3, 9),
(29, 4, 'null', 0, 0, 1, 20),
(30, 1, 'null', 0, 0, 4, 17),
(32, 1, 'l', 0, 0, 1, 46);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `libelle`, `prix`, `description`, `photo`, `designation`, `date`) VALUES
(1, 'Converse', 30, 'converse a le dernier style', '17.jpg', 'femme', '2022-06-01'),
(2, 'Crop-top', 13, 'Decouvrez des crop-top', '4.jpg', 'femme', '2022-02-02'),
(3, 'Ensemble 2 pièces', 25, 'ensemble 2 pièces', '7.jpg', 'femme', '2022-07-05'),
(4, 'Sandal', 9, 'sondal de bonne qualite', '1.jpg', 'femme', '2022-06-10'),
(5, 'Pantalon', 25, 'homme pantalon à poche', '42.jpg', 'homme', '2022-09-02'),
(6, 'Short', 15, 'homme short en jean ', '37.jpg', 'homme', '2021-05-05'),
(7, 'Ensemble 2 pièces', 30, 'ensemble deux pièces', '23.jpg', 'homme', '2021-11-11'),
(8, 'Ensemble 2 pièces', 30, 'ensemble 2 pièces', '22.jpg', 'homme', '2021-12-02'),
(9, 'Manteau', 50, 'Homme manteau ', '45.jpg', 'homme', '2022-06-02'),
(10, 'Ensemble 2 pièces', 50, 'Garçon sweet-shirt ', '50.jpg', 'enfant', '2021-06-02'),
(11, 'Top', 15, 'Basics fille T-shirt unicolore', '52.jpg', 'enfant', '2022-03-02'),
(12, 'Salopette', 25, 'Fille T-shirt et salopette ', '53.jpg', 'enfant', '2022-04-03'),
(13, 'Salopette', 25, 'Fille T-shirt et salopette ', '54.jpg', 'enfant', '2022-02-12'),
(14, 'Bracelet', 3, 'Garçon bracelet  ', '81.jpg', 'accessoire ', '2022-01-02'),
(15, 'Lunette', 10, 'lunette de mode à montures ', '72.jpg', 'accessoire ', '2021-12-02'),
(16, 'Casquette ', 5, 'casquette de base-ball', '78.jpg', 'accessoire ', '2021-04-22'),
(17, 'Lunettes', 11, 'lunette de mode à montures', '73.jpg', 'accessoire ', '2022-06-22'),
(18, 'Bonnet', 5, 'bonnet avec borderie ', '77.jpg', 'accessoire', '2022-06-20'),
(19, 'Collier', 25, 'collier avec strass', '65.jpg', 'accessoire ', '2022-01-10'),
(20, 'Collier', 25, 'collier avec strass', '66.jpg', 'accessoire ', '2021-03-02'),
(21, 'Collier avec strass', 30, 'collier des hommes ', '71.jpg', 'accessoire', '2021-12-02'),
(22, 'Bracelets', 10, 'des pièces bracelet  ', '68.jpg', 'accessoire', '2022-03-12'),
(23, 'Anneaux ', 7, 'des pièces anneau ', '67.jpg', 'accessoire', '2022-02-02'),
(24, 'Salopettes', 50, 'Filles T-shirt et salopettes', '58.jpg', 'enfant', '2022-10-10'),
(25, 'Salopette', 20, 'Fille T-shirt et salopette', '55.jpg', 'enfant', '2021-12-25'),
(26, 'oreilles', 30, 'des paires boucles d\'oreilles', '69.jpg', 'accessoire', '2022-02-05'),
(27, 'Montre', 9, 'une pièces montre  ', '64.jpg', 'accessoire', '2022-03-05'),
(28, 'Ballerine', 21, 'Ballerine femme cuir souple', '8.jpg', 'femme', '2022-04-21'),
(31, 'Nike jordan', 35, 'nike jordan bleu ciel', '12.jpg', 'femme', '2022-03-05'),
(32, 'Robe', 16, 'Robe unicolore manches ', '2.jpg', 'femme', '2022-01-22'),
(35, 'Chaussures', 20, 'Homme Chaussures ', '32.jpg', 'homme', '2022-03-22'),
(37, 'Sandale', 20, 'Homme Sandale de sport ', '41.jpg', 'homme', '2022-06-01'),
(39, 'Jean ', 17, 'Jean taille haute ample', '24.jpg', 'femme', '2022-04-21'),
(41, 'Survêtement', 21, 'Sweat-shirt & Pantalon', '23.jpg', 'femme', '2022-05-15'),
(43, 'Crop-top', 13, 'Crop-top 2 piéces femme', '6.jpg', 'femme', '2022-05-30'),
(44, 'Jean', 16, 'Jean bleu fonce', '25.jpg', 'femme', '2022-05-19'),
(45, 'Nike', 26, 'Blazer Mid en blanc', '14.jpg', 'femme', '2022-05-14'),
(46, 'Top homme', 14, 'Top homme tissus de qualité', '29.jpg', 'homme', '2022-05-20'),
(47, 'Top homme', 12, 'Top homme tissus de qualité', '30.jpg', 'homme', '2022-04-21');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idProduit` (`idProduit`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`idPanier`),
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idProduit` (`idProduit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `idPanier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
