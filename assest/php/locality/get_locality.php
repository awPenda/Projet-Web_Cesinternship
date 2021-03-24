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
}
?>