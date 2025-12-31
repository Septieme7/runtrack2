<!DOCTYPE html>
<html>
<head>
    <title>Job 12 - Étudiants 1998-2018</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Étudiants nés entre 1998 et 2018</h1>
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'jour09');
    
    if ($mysqli->connect_error) {
        die("Erreur de connexion : " . $mysqli->connect_error);
    }
    
    $query = "SELECT prenom, nom, naissance FROM etudiants WHERE YEAR(naissance) BETWEEN 1998 AND 2018";
    $result = $mysqli->query($query);
    
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<thead><tr>';
        echo '<th>prenom</th>';
        echo '<th>nom</th>';
        echo '<th>naissance</th>';
        echo '</tr></thead>';
        
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['prenom']) . '</td>';
            echo '<td>' . htmlspecialchars($row['nom']) . '</td>';
            echo '<td>' . htmlspecialchars($row['naissance']) . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    } else {
        echo "Aucun résultat trouvé.";
    }
    
    $result->free();
    $mysqli->close();
    ?>
</body>
</html>