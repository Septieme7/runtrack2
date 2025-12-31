<!DOCTYPE html>
<html>
<head>
    <title>Job 01 - Tous les étudiants</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Liste de tous les étudiants</h1>
    <?php
    // Connexion à la base de données
    $mysqli = new mysqli('localhost', 'root', '', 'jour09');
    
    // Vérification de la connexion
    if ($mysqli->connect_error) {
        die("Erreur de connexion : " . $mysqli->connect_error);
    }
    
    // Requête SQL
    $query = "SELECT * FROM etudiants";
    $result = $mysqli->query($query);
    
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<thead><tr>';
        
        // Affichage des noms des colonnes
        $fields = $result->fetch_fields();
        foreach ($fields as $field) {
            echo '<th>' . htmlspecialchars($field->name) . '</th>';
        }
        echo '</tr></thead>';
        
        echo '<tbody>';
        // Affichage des données
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            foreach ($row as $value) {
                echo '<td>' . htmlspecialchars($value) . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody></table>';
    } else {
        echo "Aucun résultat trouvé.";
    }
    
    // Fermeture de la connexion
    $result->free();
    $mysqli->close();
    ?>
</body>
</html>