# Job 01 - Création de la base de données et des tables
cat > jour09/job01/job01.sql << 'EOF'
CREATE DATABASE IF NOT EXISTS jour09;

USE jour09;

CREATE TABLE etudiants (
    id INT PRIMARY KEY AUTO_INCREMENT,
    prenom VARCHAR(255),
    nom VARCHAR(255),
    naissance DATE,
    sexe VARCHAR(25),
    email VARCHAR(255)
);

CREATE TABLE etage (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    numero INT,
    superficie INT
);

CREATE TABLE salles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    id_etage INT,
    capacite INT
);
EOF

# Job 02 - Insertion des données
cat > jour09/job02/job02.sql << 'EOF'
USE jour09;

INSERT INTO etudiants (prenom, nom, naissance, sexe, email) VALUES
('Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
('Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
('Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
('Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
('Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
('Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
('Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');

INSERT INTO etage (id, nom, numero, superficie) VALUES
(1, 'RDC', 0, 500),
(2, 'R+1', 1, 500);

INSERT INTO salles (id, nom, id_etage, capacite) VALUES
(1, 'Lounge', 1, 100),
(2, 'Studio Son', 1, 5),
(3, 'Broadcasting', 2, 50),
(4, 'Bocal Peda', 2, 4),
(5, 'Coworking', 2, 80),
(6, 'Studio Video', 2, 5);
EOF

# Job 03 - Sélection de tous les étudiants
cat > jour09/job03/job03.sql << 'EOF'
USE jour09;
SELECT * FROM etudiants;
EOF

# Job 04 - Nom et capacité des salles
cat > jour09/job04/job04.sql << 'EOF'
USE jour09;
SELECT nom, capacite FROM salles;
EOF

# Job 05 - Étudiants de sexe féminin
cat > jour09/job05/job05.sql << 'EOF'
USE jour09;
SELECT prenom, nom, naissance 
FROM etudiants 
WHERE sexe = 'Femme';
EOF

# Job 06 - Étudiants dont le prénom commence par T
cat > jour09/job06/job06.sql << 'EOF'
USE jour09;
SELECT * 
FROM etudiants 
WHERE prenom LIKE 'T%';
EOF

# Job 07 - Étudiants majeurs (plus de 18 ans)
cat > jour09/job07/job07.sql << 'EOF'
USE jour09;
SELECT * 
FROM etudiants 
WHERE DATE_ADD(naissance, INTERVAL 18 YEAR) < CURDATE();
EOF

# Job 08 - Nombre d'étudiants
cat > jour09/job08/job08.sql << 'EOF'
USE jour09;
SELECT COUNT(*) AS nombre_etudiants FROM etudiants;
EOF

# Job 09 - Étudiants mineurs (moins de 18 ans)
cat > jour09/job09/job09.sql << 'EOF'
USE jour09;
SELECT * 
FROM etudiants 
WHERE DATE_ADD(naissance, INTERVAL 18 YEAR) > CURDATE();
EOF

# Job 10 - Superficie totale des étages
cat > jour09/job10/job10.sql << 'EOF'
USE jour09;
SELECT SUM(superficie) AS superficie_totale FROM etage;
EOF

# Job 11 - Somme des capacités des salles
cat > jour09/job11/job11.sql << 'EOF'
USE jour09;
SELECT SUM(capacite) AS capacite_totale FROM salles;
EOF

# Job 12 - Salles triées par capacité décroissante
cat > jour09/job12/job12.sql << 'EOF'
USE jour09;
SELECT * 
FROM salles 
ORDER BY capacite DESC;
EOF

# Job 13 - Capacité moyenne des salles
cat > jour09/job13/job13.sql << 'EOF'
USE jour09;
SELECT AVG(capacite) AS capacite_moyenne FROM salles;
EOF

# Job 14 - Étudiants nés entre 1998 et 2018
cat > jour09/job14/job14.sql << 'EOF'
USE jour09;
SELECT prenom, nom, naissance 
FROM etudiants 
WHERE YEAR(naissance) BETWEEN 1998 AND 2018;
EOF

# Job 15 - Salles avec leur étage
cat > jour09/job15/job15.sql << 'EOF'
USE jour09;
SELECT s.nom AS salle_nom, e.nom AS etage_nom
FROM salles s
JOIN etage e ON s.id_etage = e.id;
EOF

# Job 16 - Salle avec la plus grande capacité
cat > jour09/job16/job16.sql << 'EOF'
USE jour09;
SELECT 
    s.nom AS Biggest_Room,
    e.nom AS etage_nom,
    s.capacite
FROM salles s
JOIN etage e ON s.id_etage = e.id
ORDER BY s.capacite DESC
LIMIT 1;
EOF

echo "Tous les fichiers SQL ont été créés avec succès niakniak !!!"