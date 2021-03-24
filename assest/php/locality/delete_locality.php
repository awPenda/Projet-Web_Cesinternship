<?php
class delete_locality extends dbh{
    public function del_locality($id_locality){
        $sql = "DELETE FROM locality WHERE id_locality LIKE $id_locality";
        //echo $sql;
        $result = $this->connect()->query($sql);
    }
}
?>