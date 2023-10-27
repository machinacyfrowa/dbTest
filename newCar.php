<?php
$db = new mysqli('localhost', 'root', '', 'auta');

$marka = $_POST['marka'];
$model = $_POST['model'];
$rocznik = $_POST['rocznik'];

$query = "INSERT INTO samochody 
                VALUES (NULL, 1, '$marka', '$model', $rocznik)";

$db->query($query);

$db->close();
?>