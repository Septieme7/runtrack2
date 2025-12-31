<!DOCTYPE html>
<html>
<head>
    <title>Job 13 - Salles et étages</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Salles avec leur étage</h1>
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'jour09');
    
    if ($mysqli->connect_error) {
        die("Erreur de connexion : " . $mysqli->connect_error);
    }
    
    $query = "SELECT s.nom as salle_nom, e.nom as etage_nom FROM salles s JOIN etage e ON s.id_etage = e.id";
    $result = $mysqli->query($query);
    
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<thead><tr>';
        echo '<th>salle_nom</th>';
        echo '<th>etage_nom</th>';
        echo '</tr></thead>';
        
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['salle_nom']) . '</td>';
            echo '<td>' . htmlspecialchars($row['etage_nom']) . '</td>';
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