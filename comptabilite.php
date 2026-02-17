<?php
require_once "config.php";

$result = $conn->query("SELECT * FROM comptabilite");

echo "<h2>Comptabilité</h2><ul>";

while($row = $result->fetch_assoc()) {
    echo "<li>".$row['type']." : ".$row['montant']." FCFA le ".$row['date']."</li>";
}

echo "</ul>";
?>
