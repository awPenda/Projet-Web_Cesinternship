<?php
class updating_locality extends dbh{
public function update_locality($id_locality,$zip_code,$city_name ){
        $sql = "UPDATE locality SET zip_code='$zip_code',city_name='$city_name' WHERE id_locality like '$id_locality'";
        //echo $sql;
        $result = $this->connect()->query($sql);
    }
    }
    ?>