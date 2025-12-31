-- job14.sql
USE jour09;
SELECT prenom, nom, naissance 
FROM etudiants 
WHERE YEAR(naissance) BETWEEN 1998 AND 2018;