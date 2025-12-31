<!DOCTYPE html>
<html>
<head>
    <title>Job 05 - Étudiants mineurs</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Étudiants mineurs (moins de 18 ans)</h1>
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'jour09');
    
    if ($mysqli->connect_error) {
        die("Erreur de connexion : " . $mysqli->connect_error);
    }
    
    $query = "SELECT * FROM etudiants WHERE DATE_ADD(naissance, INTERVAL 18 YEAR) > CURDATE()";
    $result = $mysqli->query($query);
    
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<thead><tr>';
        
        $fields = $result->fetch_fields();
        foreach ($fields as $field) {
            echo '<th>' . htmlspecialchars($field->name) . '</th>';
        }
        echo '</tr></thead>';
        
        echo '<tbody>';
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
    
    $result->free();
    $mysqli->close();
    ?>
</body>
</html>