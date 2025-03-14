-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 14 mars 2025 à 16:51
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `job_portal`
--

-- --------------------------------------------------------

--
-- Structure de la table `job_offers`
--

DROP TABLE IF EXISTS `job_offers`;
CREATE TABLE IF NOT EXISTS `job_offers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `mission` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `employment_type` enum('CDI','CDD','Freelance','Internship') NOT NULL,
  `technologies_used` text NOT NULL,
  `benefits` text NOT NULL,
  `participants_count` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `job_offers`
--

INSERT INTO `job_offers` (`id`, `title`, `description`, `mission`, `location`, `category`, `author`, `employment_type`, `technologies_used`, `benefits`, `participants_count`, `created_at`, `image_url`) VALUES
(3, 'Développeur Full Stack', 'Nous recherchons un Développeur Full Stack talentueux pour rejoindre notre équipe dynamique.', 'Développer et maintenir des applications web modernes en utilisant des technologies front-end et back-end.', 'Paris, France', 'Développement Web', 'TechCorp Inc.', 'CDI', 'JavaScript, React, Node.js, MySQL', 'Télétravail possible, Assurance santé, Horaires flexibles', 0, '2025-03-14 08:55:44', 'https://www.educatel.fr/wp-content/uploads/2021/04/metier-developpeur-web-1.jpg'),
(4, 'Ingénieur Backend', 'Rejoignez notre équipe backend pour concevoir des API performantes et sécurisées.', 'Concevoir et implémenter des API REST avec les meilleures pratiques de sécurité.', 'Lyon, France', 'Ingénierie Logicielle', 'Cloud Solutions Ltd.', 'CDI', 'Python, Django, PostgreSQL, Docker', 'Stock-options, Abonnement salle de sport, Congés payés', 0, '2025-03-14 08:55:44', 'https://www.supplychaininfo.eu/wp-content/uploads/2019/07/shutterstock_611605280-compressor-1.jpg'),
(5, 'Développeur Frontend', 'Nous avons besoin d\'un Développeur Frontend créatif pour améliorer nos interfaces utilisateur.', 'Implémenter des designs responsifs et optimiser les performances front-end.', 'Marseille, France', 'Développement Web', 'CreativeWeb Agency', 'Freelance', 'HTML, CSS, JavaScript, Vue.js', 'Horaires flexibles, Travail à distance, Formations internes', 0, '2025-03-14 08:55:44', 'https://be-freelancer.cherry-pick.io/wp-content/uploads/2019/09/developpeur-front-end-cherry-pick.jpeg'),
(6, 'Ingénieur DevOps', 'Nous recherchons un Ingénieur DevOps expérimenté pour automatiser et optimiser notre infrastructure cloud.', 'Mettre en place des pipelines CI/CD et gérer les déploiements cloud.', 'Toulouse, France', 'Infrastructure & Cloud', 'CloudOps Solutions', 'CDI', 'AWS, Kubernetes, Terraform, Jenkins', 'Ordinateur de fonction, Télétravail, Prime annuelle', 0, '2025-03-14 08:55:44', 'https://expleo.com/global/fr/wp-content/uploads/2021/10/devops-1.jpeg'),
(7, 'Data Scientist', 'Nous recrutons un Data Scientist pour analyser de grands ensembles de données et créer des modèles prédictifs.', 'Développer des algorithmes de machine learning et des outils de visualisation des données.', 'Bordeaux, France', 'Data Science & IA', 'DataVision Ltd.', 'CDD', 'Python, Pandas, TensorFlow, SQL', 'Salaire compétitif, Horaires flexibles, Snacks gratuits', 0, '2025-03-14 08:55:44', 'https://www.consultor.fr/images/articles/3418/_thumb2/Data-scientists.webp'),
(14, 'aaaaaaaazzzzsdqdqsd', '^aaaaaaaaaaazzzdsqd', 'oui oui baguettezzz', 'Francezzz', 'Vendeur infozzz', 'LDLCzzzzeaze', 'Freelance', 'La tchachezzz', 'Aucun z', 0, '2025-03-14 15:40:27', 'https://media.ldlc.com/nbo/ldlc/shop/52a29a721d43e19ae95f661c6f1eca9c8f95dfac.jpgzz');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstName`, `lastName`, `avatar`, `specialite`, `admin`) VALUES
(1, 'admin@job-portal.fr', 'root', 'admin', 'root', 'https://www.khdestiny.fr/images/avatars/1.jpg', 'administrateur', 1),
(2, 'toto@toto.fr', 'toto', 'toto', 'otot', '', '', 0),
(3, 'obed@test.fr', 'azerty', 'Obed', 'Obed', '', '', 0),
(4, 'aaa@aaa.fr', 'aaaa', 'bbbb', 'aaaa', '', '', 0),
(7, '', '', '', '', '', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
