<?php
require_once "config.php";

$result = $conn->query("SELECT * FROM plannings");

echo "<h2>Planning des Employés</h2><ul>";

while($row = $result->fetch_assoc()) {
    echo "<li>Employé ID: ".$row['employe_id']." | Du ".$row['date_debut']." au ".$row['date_fin']."</li>";
}

echo "</ul>";
?>
