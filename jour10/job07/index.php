<!DOCTYPE html>
<html>
<head>
    <title>Job 07 - Superficie totale</title>
    <style>
        table { border-collapse: collapse; width: 300px; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Superficie totale des étages</h1>
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'jour09');
    
    if ($mysqli->connect_error) {
        die("Erreur de connexion : " . $mysqli->connect_error);
    }
    
    $query = "SELECT SUM(superficie) as superficie_totale FROM etage";
    $result = $mysqli->query($query);
    
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<thead><tr><th>superficie_totale</th></tr></thead>';
        echo '<tbody>';
        
        $row = $result->fetch_assoc();
        echo '<tr><td>' . htmlspecialchars($row['superficie_totale']) . '</td></tr>';
        
        echo '</tbody></table>';
    } else {
        echo "Aucun résultat trouvé.";
    }
    
    $result->free();
    $mysqli->close();
    ?>
</body>
</html>