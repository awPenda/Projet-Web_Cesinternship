<?php

//classe compagnye avec la méthode pour ajout dans la bdd en preparant le requète pour éviter les injections
class compagny extends dbh{
public function add_compagny($activity,$compagny_name,$email,$zip_code,$town,$number_interns){
    //echo var_dump($activity,$compagny_name,$email,$zip_code,$town,$number_interns);
    $sql = "INSERT INTO `compagny`(`id_compagny`, `name_compagny`, `email_compagny`, `activity_compagny`, `nb_cesi_internship`) VALUES ('',?,?,?,?); 
    INSERT INTO `located` (`id_compagny`, `id_locality`) 
    SELECT compagny.id_compagny, locality.id_locality 
    FROM compagny NATURAL JOIN locality 
    WHERE compagny.name_compagny LIKE ? 
    AND locality.zip_code LIKE ?; ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$compagny_name,$email,$activity,$number_interns,/**/$compagny_name,/**/$zip_code]);
}

public function modify_compagny($id_compagny,$activity,$compagny_name,$email,$zip_code,$town,$number_interns){
    //echo '<script language="javascript">';
    //echo 'alert("One change have been made")';
    //echo '</script>';
    //echo var_dump($id_compagny,$activity,$compagny_name,$email,$zip_code,$town,$number_interns);
    $sql = "UPDATE `compagny` 
    SET 
            compagny.name_compagny=?, 
            compagny.email_compagny=?, 
            compagny.activity_compagny=?, 
            compagny.nb_cesi_internship=?     
        WHERE compagny.id_compagny LIKE ?; 
    UPDATE `located` 
    SET 
            located.id_compagny=(SELECT compagny.id_compagny FROM compagny WHERE compagny.id_compagny LIKE ? LIMIT 1), 
            located.id_locality=(SELECT locality.id_locality FROM locality WHERE locality.zip_code LIKE ? LIMIT 1) 
        WHERE located.id_compagny LIKE ? 
        LIMIT 1; ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$compagny_name,$email,$activity,$number_interns,$id_compagny,/**/$id_compagny,$zip_code,/**/$id_compagny]);
}
public function delete_compagny($id_compagny){
    echo var_dump($id_compagny);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
}

?>