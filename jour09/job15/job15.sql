-- job15.sql
USE jour09;
SELECT s.nom AS salle_nom, e.nom AS etage_nom
FROM salles s
JOIN etage e ON s.id_etage = e.id;