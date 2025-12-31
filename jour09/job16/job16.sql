-- job16.sql
USE jour09;
SELECT 
    s.nom AS Biggest_Room,
    e.nom AS etage_nom,
    s.capacite
FROM salles s
JOIN etage e ON s.id_etage = e.id
ORDER BY s.capacite DESC
LIMIT 1;