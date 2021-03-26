<?php

class locality extends dbh{

    public function get_locality(){
        $sql = "SELECT * FROM locality";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo $row['id_locality'].'<br>';
            echo $row['zip_code'].'<br>';
            echo $row['city_name'].'<br>';
        }
    }

    public function add_locality($zip_code,$city_name){
        $sql = "INSERT INTO locality (`zip_code`, `city_name`) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$zip_code,$city_name]);
    }

    public function modify_locality($id_locality,$zip_code,$city_name){
        $sql = "UPDATE `locality` SET `zip_code`=?,`city_name`=? WHERE `id_locality` LIKE ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$zip_code,$city_name,$id_locality]);
    }

    public function delete_locality($id_locality){
        $sql = "DELETE FROM locality WHERE `id_locality` LIKE ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id_locality]);
    }
}

?>