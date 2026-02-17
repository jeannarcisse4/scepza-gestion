<?php
require_once "config.php";

$result = $conn->query("SELECT * FROM magasins");

echo "<h2>Liste des Magasins</h2><ul>";

while($row = $result->fetch_assoc()) {
    echo "<li>".$row['nom']." - ".$row['localisation']."</li>";
}

echo "</ul>";
?>
