<?php

//classe compagnye avec la méthode pour ajout dans la bdd en preparant le requète pour éviter les injections
class compagny extends dbh{
public function add_compagny($activity,$compagny_name,$email,$zip_code,$town,$number_interns){
    //echo var_dump($activity,$compagny_name,$email,$zip_code,$town,$number_interns);
    $sql = "INSERT INTO `compagny`(`name_compagny`, `email_compagny`, `activity_compagny`, `nb_cesi_internship`) VALUES (?,?,?,?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$compagny_name,$email,$activity,$number_interns]);
}

}

?>