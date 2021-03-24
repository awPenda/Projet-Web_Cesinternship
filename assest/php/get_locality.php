<?php

class locality extends dbh{

    protected function get_locality() {
       $sql = "SELECT * FROM locality";
       $result = $this->connect()->query($sql);
       $num_rows = $result->num_rows;
       if($num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
       }
       else {
           echo "no result found";
       }
    }
    public function add_locality($zip_code, $city_name){
        $sql = "INSERT INTO locality (zip_code,city_name) VALUES ('$zip_code', '$city_name');";
        //echo $sql.'<br>';
        $result = $this->connect()->query($sql);
    }
    public function update_locality($id_locality,$zip_code,$city_name ){
        $sql = "UPDATE locality SET zip_code='$zip_code',city_name='$city_name' WHERE id_locality like '$id_locality'";
        //echo $sql;
        $result = $this->connect()->query($sql);
    }
}
?>