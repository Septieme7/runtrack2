-- job09.sql
USE jour09;
SELECT * 
FROM etudiants 
WHERE DATE_ADD(naissance, INTERVAL 18 YEAR) > CURDATE();