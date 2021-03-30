<?php
//classe pour la gestion des stages
class internship extends dbh{
    //ajout d'un stage
    public function add_internship($available,$level,$number,$skill1,$skill2,$skill3,$beginning,$ending,$pay,$id_compagny,$publication,$description){
        echo var_dump($available,$level,$number,$skill1,$skill2,$skill3,$beginning,$ending,$pay,$id_compagny,$publication,$description);
        //$sql = "";
        //$stmt = $this->connect()->prepare($sql);
        //$stmt->execute([]);
    }
    //modif d'un stage
    public function modify_internship($id_internship,$available,$level,$number,$skill1,$skill2,$skill3,$beginning,$ending,$pay,$id_compagny,$publication,$description){
        echo var_dump($available,$level,$number,$skill1,$skill2,$skill3,$beginning,$ending,$pay,$id_compagny,$publication,$description);
        //$sql = "";
        //$stmt = $this->connect()->prepare($sql);
        //$stmt->execute([]);
    }
    //suppression d'un stage
    public function delete_internship($id_internship){
        echo var_dump($id_internship);
        //$sql = "";
        //$stmt = $this->connect()->prepare($sql);
        //$stmt->execute([]);
    }
}
?>