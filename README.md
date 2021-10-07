# itweb_site
# Data default

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 07 oct. 2021 à 22:11
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `itwebson`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id` int(11) NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texte_introduction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texte_complet` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id`, `titre`, `texte_introduction`, `texte_complet`, `user_id`, `image`, `updated_at`) VALUES
(3, 'Conseil stratégique', '<div>Pour l\'élaboration d’une bonne stratégie, Notre équipe de consultants, d\'analystes web et de marketeurs expérimentés sera en mesure de vous accompagner et de vous conseiller efficacement dans tous vos projets de positionnement.</div>', '<div>Pour l\'élaboration d’une stratégie de mise en place d’un systèmes d’information et de gouvernance supportant les activités de communication, commerciale et marketing, Notre équipe de consultants, d\'analystes web et de marketeurs expérimentés sera en mesure de vous accompagner et de vous conseiller efficacement dans votre projet de positionnement et de vente, en établissant dès le départ une stratégie orientée vers vos objectifs business et conçue sur mesure en fonction de votre vision. A savoir :</div><ul><li>Parcours clients</li><li>Atelier d’idéation</li><li>Stratégie Digitale&nbsp;</li><li>&nbsp;Audit de marque&nbsp;</li><li>Positionnement et identité de marque&nbsp;</li><li>Focus group et test utilisateurs&nbsp;</li><li>Audit de sécurité<br><br></li></ul>', 2, 'mitech-box-image-style-01-image-02-100x108-29bd6e4f72057977ab2f33d191214e0a3bec368e.png', '2021-09-27 23:11:54'),
(4, 'Création de plateforme digitale', '<div>Les supports digitaux sont de nos jours une vitrine incontournables pour le développement de votre activité.</div>', '<div>Les supports digitaux sont de nos jours une vitrine incontournables pour le d&eacute;veloppement de votre activit&eacute;, en effet, en plus de rassurer vos partenaires, clients et investisseurs, ils peuvent &eacute;galement vous apporter des prospects qualifi&eacute;s. Ici nous offrons un service complet :<br />\r\n&nbsp;</div>\r\n\r\n<ul>\r\n	<li>Exp&eacute;rience utilisateur et design d&rsquo;interface&nbsp;</li>\r\n	<li>Vitrine digitale (site institutionnel / groupe)&nbsp;</li>\r\n	<li>Plateforme et application (servicielle / transactionnelle)&nbsp;</li>\r\n	<li>Intranet et e-Learning&nbsp;</li>\r\n	<li>&nbsp;Visibilit&eacute; SEO, SEA et Analytics&nbsp;</li>\r\n	<li>Infog&eacute;rance et maintenance&nbsp;</li>\r\n</ul>', 2, 'mitech-box-image-style-01-image-06-100x108-2ad31a936b483d69df50b447ffebc3af03e8ab57.png', '2021-09-29 15:44:59'),
(5, 'Production de contenu Trans-média', '<div>En communication, la production de contenu de qualité est la clé d’une bonne stratégie de communication. De l’apparence visuel à la production de contenu Trans-média, nous travaillons à vous construire une image de marque.</div>', '<div>En communication, la production de contenu de qualité est la clé d’une bonne stratégie de communication. De l’apparence visuel à la production de contenu Trans-média, nous travaillons à vous construire une image de marque.</div><ul><li>&nbsp;Rédaction de la présentation de l’entreprise&nbsp;</li><li>&nbsp;Vidéo / texte de présentation (produit / service)&nbsp;</li><li>Film institutionnel&nbsp;</li><li>Rapport annuel digitalisé&nbsp;</li><li>Production éditoriale&nbsp;</li><li>Activation sociale media&nbsp;</li><li>Campagne pub et spot TV&nbsp;</li><li>Animation 2D et 3D&nbsp;</li><li>Rédaction web&nbsp;</li><li>Création numérique&nbsp;</li></ul>', 2, 'mitech-box-image-style-01-image-05-100x108-7380c2a5e066c408795eea0aee710d045ee3d987.png', '2021-09-28 01:21:37');

-- --------------------------------------------------------

--
-- Structure de la table `compagnie`
--

CREATE TABLE `compagnie` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo2_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `compagnie`
--

INSERT INTO `compagnie` (`id`, `logo`, `logo_alt`, `slogan`, `lieu`, `email`, `email2`, `logo2`, `logo2_alt`) VALUES
(1, 'itwebson-8976ce63b2bf0e49222102ca71003094d01f0890.png', 'logo de itwebson', 'Pour vos solutions de communication et de marketing, Un guichet unique, <b>ITwebson !</b>', 'Rivera 3 Abidjan - Cote d\'Ivoire', 'contact@itwesbon.net', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `page_about`
--

CREATE TABLE `page_about` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sous_titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_presentation_titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_presentation_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_two_titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_vision_titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `page_about`
--

INSERT INTO `page_about` (`id`, `titre`, `sous_titre`, `image`, `feature_titre`, `feature_presentation_titre`, `feature_presentation_content`, `feature_two_titre`, `feature_vision_titre`, `image_alt`) VALUES
(1, 'Qui sommes nous?', NULL, 'business-solution-hero-bg-bcf05d430eac78bd2b01efb7c673fb46cc4f3857.jpeg', 'Développer toutes sortes de <span class=\"text-color-primary\"> solutions capables d’améliorer les performances</span> des entreprises ivoiriennes en vue de les rendre compétitives', 'ITwebson', '<p><strong><span style=\"font-size:14.0pt\">Notre vision</span></strong><br />\r\nEtre une entreprise majeure en communication digitale en Afrique en 2030<br />\r\n<strong>Nos missions</strong><br />\r\nAccompagner les entreprises dans leur processus de transformation digitale<br />\r\n<strong>Synergie :</strong> Se fondre dans la vision et les valeurs de notre client et lui offrir des solutions adapt&eacute;es &agrave; ses objectifs business<br />\r\n<strong>Qualit&eacute; :</strong> Offrir le meilleur des solutions en vue de rendre chaque client unique et comp&eacute;titif. R&eacute;pondre au besoin du client par une excellente qualit&eacute; de service dans les d&eacute;lais fix&eacute;s&nbsp;<br />\r\n<strong>Confiance :</strong> Parce que la satisfaction Client fait l&rsquo;objet de toute notre attention, nous veillons &agrave; construire des relations durables de par l&rsquo;innovation et l&rsquo;am&eacute;lioration permanente de notre qualit&eacute; de service pour un partenariat gagnant-gagnant&nbsp;</p>', NULL, 'Notre Vision', 'Qui est ITwebson');

-- --------------------------------------------------------

--
-- Structure de la table `page_accueil`
--

CREATE TABLE `page_accueil` (
  `id` int(11) NOT NULL,
  `slide_text1` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_text2` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_text3` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_img_text1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_img_text2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_img_text3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_bloc_contact_text1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_bloc_contact_text2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_bloc_about_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_bloc_about_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_bloc_about_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_bloc_appel_action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `page_accueil`
--

INSERT INTO `page_accueil` (`id`, `slide_text1`, `slide_text2`, `slide_text3`, `slide_img_text1`, `slide_img_text2`, `slide_img_text3`, `section_bloc_contact_text1`, `section_bloc_contact_text2`, `section_bloc_about_img`, `section_bloc_about_title`, `section_bloc_about_content`, `section_bloc_appel_action`) VALUES
(1, 'Efficacité', 'Dynamisme', 'Innovation', 'hero-selector-icon-e52a6b7c2a22a22fc4cf4366b71a458bfa9cbbe6.png', 'hero-selector-icon-e52a6b7c2a22a22fc4cf4366b71a458bfa9cbbe6.png', 'hero-selector-icon-e52a6b7c2a22a22fc4cf4366b71a458bfa9cbbe6.png', '<div><strong>Nous restons à votre disposition pour toute information supplémentaire. Veuillez nous contacter au:</strong></div>', 'Nos équipes sont disponibles 24h/7 pour toutes assistances..', 'hero-selector-icon-e52a6b7c2a22a22fc4cf4366b71a458bfa9cbbe6.png', '<h3 class=\"heading\">For your very specific industry, we <span class=\"text-color-primary\">have highly-tailored IT solutions.</span> </h3>', '<div>Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses elevate their value through custom software development, product design, QA and consultancy services.</div>', '<h3 class=\"heading text-white\">Nous gérons toutes sortes de services informatiques qui promettent votre <span class=\"text-color-secondary\"> succès</span></h3>');

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE `partenaire` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` date NOT NULL,
  `updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recrutement`
--

CREATE TABLE `recrutement` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `section_one`
--

CREATE TABLE `section_one` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `section_one`
--

INSERT INTO `section_one` (`id`, `titre`, `content`, `image`, `alt`, `subtitre`) VALUES
(1, 'Pour vos solutions de communication et de marketing, Un guichet unique, ITwebson !', '<div>Nos équipes sont disponibles 24h/7 pour toutes assistances ...</div>', NULL, NULL, NULL),
(2, 'For your very specific industry, we <span class=\"text-color-primary\">have highly-tailored IT solutions.</span>', '<div>Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses elevate their value through custom software development, product design, QA and consultancy services.</div>', 'soft-s2-01-51ae3fbd909c245cb79383ec6647a0845c4f30a5.png', 'section de texte', 'ITWebson Group'),
(3, 'Ils nous ont fait <span class=\"text-color-secondary\"> confiance.</span>', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `section_two`
--

CREATE TABLE `section_two` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `titre`, `content`, `image`, `alt`) VALUES
(1, 'Création de plateforme digitale', '<p>Les supports digitaux sont de nos jours une vitrine incontournables pour le d&eacute;veloppement de votre activit&eacute;, en effet, en plus de rassurer vos partenaires, clients et investisseurs, ils peuvent &eacute;galement vous apporter des prospects qualifi&eacute;s. Ici nous offrons un service complet&nbsp;:</p>\r\n\r\n<ul>\r\n	<li><strong>Exp&eacute;rience utilisateur et design d&rsquo;interface</strong></li>\r\n	<li><strong>Vitrine digitale (site institutionnel / groupe)</strong></li>\r\n	<li><strong>Plateforme et application (servicielle / transactionnelle)</strong></li>\r\n	<li><strong>Intranet et e-Learning</strong></li>\r\n	<li><strong>Visibilit&eacute; SEO, SEA et Analytics</strong></li>\r\n	<li><strong>Infog&eacute;rance et maintenance</strong></li>\r\n</ul>', NULL, NULL),
(2, 'Conseil stratégique', '<p>Pour l&#39;&eacute;laboration d&rsquo;une strat&eacute;gie de mise en place d&rsquo;un syst&egrave;mes d&rsquo;information et de gouvernance supportant les activit&eacute;s de communication, commerciale et marketing, Notre &eacute;quipe de consultants, d&#39;analystes web et de marketeurs exp&eacute;riment&eacute;s sera en mesure de vous accompagner et de vous conseiller efficacement dans votre projet de positionnement et de vente, en &eacute;tablissant d&egrave;s le d&eacute;part une strat&eacute;gie orient&eacute;e vers vos objectifs business et con&ccedil;ue sur mesure en fonction de votre vision. A savoir&nbsp;:</p>\r\n\r\n<ul>\r\n	<li><strong>Parcours clients</strong></li>\r\n	<li><strong>Atelier d&rsquo;id&eacute;ation</strong></li>\r\n	<li><strong>Strat&eacute;gie Digitale</strong></li>\r\n	<li><strong>Audit de marque</strong></li>\r\n	<li><strong>Positionnement et identit&eacute; de marque</strong></li>\r\n	<li><strong>Focus group et test utilisateurs</strong></li>\r\n	<li><strong>Audit de s&eacute;curit&eacute;</strong></li>\r\n</ul>', NULL, NULL),
(3, 'Production de contenu Trans-média', '<p>En communication, la production de contenu de qualit&eacute; est la cl&eacute; d&rsquo;une bonne strat&eacute;gie de communication. De l&rsquo;apparence visuel &agrave; la production de contenu Trans-m&eacute;dia, nous travaillons &agrave; vous construire une image de marque.</p>\r\n\r\n<ul>\r\n	<li><strong>Vid&eacute;o / texte de pr&eacute;sentation (produit / service)</strong></li>\r\n	<li><strong>Film institutionnel</strong></li>\r\n	<li><strong>Rapport annuel digitalis&eacute; <span style=\"font-family:&quot;Segoe UI Symbol&quot;,&quot;sans-serif&quot;\"></span> &nbsp;&nbsp;&nbsp;&nbsp;</strong></li>\r\n	<li><strong>Production &eacute;ditoriale</strong></li>\r\n	<li><strong>Activation sociale media</strong></li>\r\n	<li><strong>Campagne pub et spot TV</strong></li>\r\n	<li><strong>Animation 2D et 3D</strong></li>\r\n	<li><strong>R&eacute;daction web</strong></li>\r\n	<li><strong>Cr&eacute;ation num&eacute;rique&nbsp;</strong></li>\r\n</ul>', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `slide`
--

INSERT INTO `slide` (`id`, `titre`, `texte`, `image`, `alt`) VALUES
(1, 'Efficacité', NULL, NULL, NULL),
(2, 'Dynamisme', NULL, NULL, NULL),
(3, 'Innovation', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(2, 'administrator@itwebson.com', '[\"ROLE_ADMIN\"]', '$2y$13$d/jYaOlIJZLiquJaF/E4I.dziFF6GtJ/6G5z./0uuRIXbtUvS59qK');

-- --------------------------------------------------------

--
-- Structure de la table `vision`
--

CREATE TABLE `vision` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vision`
--

INSERT INTO `vision` (`id`, `titre`, `details`) VALUES
(1, 'Concevoir', '<div>des sites et application web personnalisés (valeurs, besoins et moyens).</div>'),
(2, 'Développer', '<div>toutes sortes de solutions capables d’améliorer les performances des entreprises ivoiriennes en vue de les rendre compétitives.</div>'),
(3, 'Augmenter', '<div>la visibilité du support web des promoteurs et le trafic de leurs sites.</div>'),
(4, 'Assister', '<div>Techniquement en vue de les aider à obtenir plus de ventes et à améliorer l’image de leur business ou compagnie</div>');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B8755515A76ED395` (`user_id`);

--
-- Index pour la table `compagnie`
--
ALTER TABLE `compagnie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `page_about`
--
ALTER TABLE `page_about`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `page_accueil`
--
ALTER TABLE `page_accueil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recrutement`
--
ALTER TABLE `recrutement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `section_one`
--
ALTER TABLE `section_one`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `section_two`
--
ALTER TABLE `section_two`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Index pour la table `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `compagnie`
--
ALTER TABLE `compagnie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `page_about`
--
ALTER TABLE `page_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `page_accueil`
--
ALTER TABLE `page_accueil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recrutement`
--
ALTER TABLE `recrutement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `section_one`
--
ALTER TABLE `section_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `section_two`
--
ALTER TABLE `section_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `vision`
--
ALTER TABLE `vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `FK_B8755515A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

