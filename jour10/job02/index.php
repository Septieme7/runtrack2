<!DOCTYPE html>
<html>
<head>
    <title>Job 02 - Salles et capacités</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Nom et capacité des salles</h1>
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'jour09');
    
    if ($mysqli->connect_error) {
        die("Erreur de connexion : " . $mysqli->connect_error);
    }
    
    $query = "SELECT nom, capacite FROM salles";
    $result = $mysqli->query($query);
    
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<thead><tr>';
        
        // Noms des colonnes
        echo '<th>nom</th>';
        echo '<th>capacite</th>';
        echo '</tr></thead>';
        
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['nom']) . '</td>';
            echo '<td>' . htmlspecialchars($row['capacite']) . '</td>';
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