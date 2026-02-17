<?php
require_once "config.php";

$result = $conn->query("SELECT * FROM produits");

echo "<h2>Liste des Produits</h2><ul>";

while($row = $result->fetch_assoc()) {
    echo "<li>".$row['nom']." (".$row['type'].")</li>";
}

echo "</ul>";
?>
