<pre>
<?php
//stwórz połaczenie do bazy danych pod nazwą $db
$db = new mysqli('localhost', 'root', '', 'auta');

//var_dump($db);

//kwerenda w języku SQL
$query = "SELECT * FROM `samochody`";
//wykonaj kwerendę dla połaczenia $db i zapisz wynik do zmiennej $result
$result = $db->query($query);

//var_dump($result);
//$row to jeden wiersz (jedna linijka z tabeli)
//fetch_assoc powoduje, że ten wiersz jest tabelą asocjacyjną (indeksowaną nazwami kolumn)
while($row = $result->fetch_assoc()) {
    //var_dump($row);
    //przepisuje do lokalnych zmiennych
    $marka = $row["marka"];
    $model = $row["model"];
    $rocznik = $row["rocznik"];
    echo "Samochód marki $marka, model $model, rok produkcji $rocznik.\n";
}

$query = "INSERT INTO samochody VALUES (NULL, 1, 'Honda', 'Civic', 2000)";

//$result = $db->query($query);

//var_dump($result);

//var_dump($db);

$query = "UPDATE samochody SET rocznik = 2005 WHERE id = 13";

$result = $db->query($query);
?> 
</pre>