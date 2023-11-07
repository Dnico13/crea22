-- Active: 1699307985388@@mysql-ndev2023.alwaysdata.net@3306@ndev2023_coco
CREATE TABLE if not exists Users (
    Id_users INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(64) NOT NULL,
    First_name VARCHAR(64) NOT NULL,
    Email VARCHAR(64) NOT NULL,
    id_Role VARCHAR(64) NOT NULL unique,
    PASSWORD VARCHAR(64) NOT NULL
    );

    CREATE TABLE if NOT EXISTS Roles(
        Id_roles INT UNSIGNED UNIQUE NOT NULL PRIMARY KEY AUTO_INCREMENT,
        Name_role VARCHAR(64) NOT NULL
    );
    CREATE TABLE if NOT EXISTS Realisations(
        Id_Realisation INT UNSIGNED  UNIQUE NOT NULL PRIMARY KEY AUTO_INCREMENT,
        Titre VARCHAR(150) NOT NULL,
        Detail1  VARCHAR(255) NOT NULL,
        Detail2 VARCHAR(255) NOT NULL,
        Detail3 VARCHAR(255) NOT NULL
    );

    CREATE TABLE if NOT EXISTS Images(
        Id_Image INT UNSIGNED UNIQUE NOT NULL PRIMARY KEY AUTO_INCREMENT,
        Image1  VARCHAR(255) NOT NULL,
        Image2  VARCHAR(255) NOT NULL,
        Image3  VARCHAR(255) NOT NULL,
        Image4  VARCHAR(255) NOT NULL,
        Image5  VARCHAR(255) NOT NULL
    );

    INSERT INTO Users(Name, Firstname,email) VALUES('Piasechi', 'Chloee','contactcrea22@gmail.com');

    INSERT INTO Roles (`Name_role`) 
    VALUES 
    ('Admin'),
    ('Visiteurs'),
    ('Clients');
     
     SELECT * FROM `Roles`

     INSERT INTO Realisations (Titre, Detail1, Detail2, Detail3)
     VALUES
     ('Boutique Trabaud','Rénovation et coup de jeune dans ce magasin de prêt à porter à Saint-Raphaël. 
Il nous a été demandé sur ce projet de remettre au gout du jour cette boutique existante depuis 20 ans. 
Un point important lors de cette rénovation été de mettre à jour ce magasin tout en conservant son âme, sa personnalité existante. La propriétaire voulait que les clients reconnaissent leur boutique tout en aimant sa nouveauté. 
Le deuxième point important de ce projet était d’apporter d’avantage de lumière dans l’espace intérieur tout en conservant les vitrines, perdre le moins d’espace de vente et correspondre à la structure des mobiliers sur mesures existants. 
16 Jours, nous avons réalisé un beau défit ! La boutique est rajeunie, dans un esprit sobre, laissant place aux articles.','Rénovation peinture et sol Rénovation des mobiliers existants 
Ouverture de la vitrine / création de mobilier Design sur mesure du mur arrondi Bar sur mesure ','CARRELAGE PIERRE MARBRE BEIGE / EFFET BÉTON GRIS / MOBILIER MÉTAL NOIR / ASSISES VELOURS NOIR'),
('Lappartement B','La réhabilitation d’une maison non habitée depuis un certain temps deviendra la réalisation d’un projet de vie pour un jeune couple ! Nous avons pour projet de rénover cette maison qui n’est plus aux normes, de plus faites de nombreuses petites pièces nous allons repenser la circulation et les espaces tout en minimisant le budget travaux. 
On conserve l’histoire de cette maison de famille en gardant le sol existant idéales pour donner un style rustique, les tomettes sont pleines de douceur et créent une atmosphère chaleureuse. 
On privilégie des éléments clairs pour les meubles et les murs afin d’équilibrer l’ensemble. Les malons donneront le ton à la finition d’un style moderne, campagne. Un air de simplicité et de fraicheur s’en dégagera.','Rénovation totale 
Conception intérieur / aménagement des espaces RDC et combles Aménagement rangement sur mesure incorporé qui façonne l’entrée et le dégagement Rénovation de l’escalier','LES TOMETTES ANCIENNES, MALONS / LES POUTRES EN BOIS / UN CARRELAGE BÉTON GRIS GRAND FORMAT / DU BOIS NATUREL CHÊNE CLAIR / DU MOBILIER CLAIR AU FORMES DESIGN 
'),
('Chapelle St Lambert','Un bâtiment une nouvelle vie ; une nouvelle vie un concept. La transformation comme acte de création. Considérer l’héritage architectural et urbain comme une source d’inspiration et de sens. La question est de transformer ; réinventer un nouvel usage. Une évidence patrimoniale : réhabilitation/mise aux normes.  
Un projet de création ou le concept est clé de l’architecture et ou l’architecture est inspiration pour le concept. Une évidence de garder un aspect tel que celui d’aujourd’hui, une ruine en pierre sans fenêtres ni portes en juxtaposition avec la nouvelle structure moderne implantée à l’intérieur comme un renouveau, une structure vers l’avenir, la curiosité.   
La nouvelle structure aérée et lumineuse en verre et moucharabieh est réfléchie sur la base d’une nouvelle composition ayant une inspiration avec les anciens vitraux. Le rapport à la lumière et aux ombres, les reflets ainsi que l’ambiance implantée. Une nouvelle structure construite sur ces bases redonnant vie a sa “première peau” la chapelle Saint Lambert.','Espace galerie 
Espace salon de thé, dégustation Espace culturel Espace bibliothèque Zone connectée ','Espace galerie Espace salon de thé, dégustation Espace culturel Espace bibliothèque Zone connectée '),
('Projet 102','Ce projet de rénovation a été proposé à nos clients qui avait le besoin de se sentir chez eux. N’aillant jamais touché au meuble existant ils ont décidé de mettre transformer leur bien en un cocoon reflétant leur personnalité. La demande principale était d’aménager leur bien dans une ambiance rassurante, chaleureuse et raffiné avec leur personnalité tout en venant s’inspirer du Japon pour un intérieur zen et design. Les lignes minimalistes des intérieurs traditionnels japonais ont influencé la décoration dans les espaces contemporains ce que nous avons donc reflété en s’adaptant au maximum dans ce projet. Nous avons prix certains code du design japonais tel que la Fonctionnalité, la fiabilité, et le naturel. Confort, espace, et esthétisme. Cela s’appelle le « Kanso », formule japonaise qui consiste à éliminer le désordre, et à ramener une forme de clarté dans la maison.','Repenser l’aménagement intérieur / Décoration d’intérieur de tout l’appartement (ici présenté seulement l’espace jour + Ch parentale) 
Contraintes présence d’énormément de livres et objets à ranger Espace bureau à intégrer pouvant correspondre à Mr et Mme Demande d’un maximum de rangement intégré et discret Réalisation d’un espace extérieur / prise de m2 intérieur au profit de la création d’un balcon','ccccc'),
('Projet 602','Rénovation complète de cet appartement resté en l’état. Dans un immeuble ou tous les appartements sont configurés de la même manière nous avons décidé d’apporter un nouveau sens à celui-ci pour notre cliente. Son rêve était d’obtenir un appartement tel qu’elle le souhaitait , optimisé  avec de nombreux rangements dans un esprit chaleureux, naturel et modern ou l’on se sent bien. Nous avons entièrement rénové l’appartement et avons effectuer une dépose importante en repensant toute la cuisine ainsi que la salle de bain. Nous avons ouvert l’entrée sur la pièce de manière à gagner en clarté. Nous avons fait en sorte dans cet espace de 35m2 d’intégré un maximum de choses tel que le chauffe-eau ou bien le tableau électrique dans des rangements afin de laisser une lisibilité facile et claire. Nous avons épuré visuellement et placé des rangements sur mesures comme ligne directrice. De plus dans ce petit espace nous avons judicieusement séparer la cuisine de l’espace salon à l’aide d’un claustra en bois.','Repenser l’aménagement intérieur 
. Remise aux normes de l’installation électrique 
. Rénovation complète du sol au plafond 
. Demande particulière de beaucoup de rangements 
. Création d’une cuisine ave beaucoup d’équipement dans un espace restreint 
. Segmenter un espace réduit afin de définir chaque zone ','Carrelage imitation parquet naturel / meuble blanc / rappel en contraste de ligne noir / claustra bois / jeux sur les différente finitions/ suspension sur mesure ');

SELECT * FROM Realisations