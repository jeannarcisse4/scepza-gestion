<?php
require_once "config.php";

$result = $conn->query("SELECT * FROM employes");

echo "<h2>Liste des Employés</h2><ul>";

while($row = $result->fetch_assoc()) {
    echo "<li>".$row['nom']." ".$row['prenom']."</li>";
}

echo "</ul>";
?>
