<!DOCTYPE html>
<html>
<head>
    <title>Job 11 - Capacité moyenne</title>
    <style>
        table { border-collapse: collapse; width: 300px; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Capacité moyenne des salles</h1>
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'jour09');
    
    if ($mysqli->connect_error) {
        die("Erreur de connexion : " . $mysqli->connect_error);
    }
    
    $query = "SELECT AVG(capacite) as capacite_moyenne FROM salles";
    $result = $mysqli->query($query);
    
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<thead><tr><th>capacite_moyenne</th></tr></thead>';
        echo '<tbody>';
        
        $row = $result->fetch_assoc();
        echo '<tr><td>' . round($row['capacite_moyenne'], 2) . '</td></tr>';
        
        echo '</tbody></table>';
    } else {
        echo "Aucun résultat trouvé.";
    }
    
    $result->free();
    $mysqli->close();
    ?>
</body>
</html>