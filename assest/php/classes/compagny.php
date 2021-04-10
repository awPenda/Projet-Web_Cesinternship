<?php

//classe compagny avec la méthode pour ajout dans la bdd en preparant le requète pour éviter les injections
class compagny extends dbh{
    //fonction ajout
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
//fonction modification
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
//fonction suppression
public function delete_compagny($id_compagny){
    //echo var_dump($id_compagny);
    $sql = "DELETE FROM `located` WHERE id_compagny=?;
    DELETE FROM `compagny` WHERE id_compagny=?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_compagny,$id_compagny]);
}
public function show_compagny(){
    $sql = "SELECT `name_compagny`, `email_compagny`, `activity_compagny`, `nb_cesi_internship`, `city_name`, `zip_code`
    FROM `compagny` 
    INNER JOIN located ON compagny.id_compagny = located.id_compagny 
    INNER JOIN locality ON located.id_locality = locality.id_locality ";
    $stmt = $this->connect()->query($sql);
    while($row = $stmt->fetch()){
        /*echo $row["name_compagny"];
        echo $row["email_compagny"];
        echo $row["activity_compagny"];
        echo $row["nb_cesi_internship"];
        echo $row["city_name"];
        echo $row["zip_code"];*/
        echo "<div class='col-md-12'>
        <div class='card flex-md-row mb-4 box-shadow h-md-250'>
            <div class='card-img-right d-sm-block' style='width: 50px; height: 50px; background-color: #046D77 ;'><i class='far fa-building fa-3x'></i></div>
            <div class='card-body d-flex flex-column align-items-start'>

              <strong class='d-inline-block mb-2 ' style='color: #046D77;' > ".$row["activity_compagny"]." </strong>
              <h3 class='mb-0'> ".$row["name_compagny"]." </h3>
              <h6 class='mb-1 text-muted'> mail : ".$row["email_compagny"]." </h6>

              <p class='mb-0'> ".$row["city_name"]." ".$row["zip_code"]." </p>
              <p class='card-text mb-auto'> Number of cesi interns : ".$row["nb_cesi_internship"]."</p>

            </div>
        </div>
      </div>";
    }
}
}

?>