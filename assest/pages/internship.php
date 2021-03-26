<?php
class internship extends dbh{
    public function add_internship($available,$level,$number,$skill1,$skill2,$skill3,$beginning,$ending,$pay,$id_compagny,$publication,$description){
        echo var_dump($available,$level,$number,$skill1,$skill2,$skill3,$beginning,$ending,$pay,$id_compagny,$publication,$description);
        //$sql = "";
        //$stmt = $this->connect()->prepare($sql);
        //$stmt->execute([]);
    }
}
?>