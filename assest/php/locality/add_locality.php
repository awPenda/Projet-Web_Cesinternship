<?php
//création de la clase adding_locality qui permet l'ajout de valeurs
class adding_locality extends dbh{
    public function add_locality($zip_code, $city_name){
        $sql = "INSERT INTO locality (zip_code,city_name) VALUES ('$zip_code', '$city_name');";
        //echo $sql.'<br>';
        $result = $this->connect()->query($sql);
    }
}
?>