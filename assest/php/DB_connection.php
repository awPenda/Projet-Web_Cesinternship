<?php
$user = 'root';
$pass = 'cesi';
//$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
try {
    $dbh = new PDO('mysql:host=localhost;dbname=web_project_database', $user, $pass);
    foreach($dbh->query("SELECT * FROM locality") as $row) {
        //print_r($row);
        echo "<br>";
        $id_locality = "{$row['id_locality']}";
        $zip_code = "{$row['zip_code']}";
        $city_name = "{$row['city_name']}";
        echo "City ID: $id_locality, Zip Code: $zip_code, City Name: $city_name";
        echo "<br>";
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>