<?php
//classe pour la gestion des stages
class internship extends dbh{
    //ajout d'un stage
    public function add_internship($available,$level,$number,$skill1,$skill2,$skill3,$duration,$pay,$id_compagny,$publication,$description){
        //echo var_dump($available,$level,$number,$skill1,$skill2,$skill3,$beginning,$ending,$pay,$id_compagny,$publication,$description);
        $sql = "INSERT INTO `internship`(`id_internship`, `status_internship`, `student_level_internship`, `period_internship`, `base_pay_internship`, `date_publication_internship`, `nb_max_student_internship`, `description_internship`, `id_compagny`)   
        VALUES('',?,?,?,?,?,?,?,?);
        INSERT INTO `requires`(`id_internship`, `id_skills`)   
        SELECT internship.id_internship, skills.id_skills 
        FROM `internship`,`skills` 
        WHERE skills.name_skills= ? 
        AND internship.id_compagny=?
        AND internship.description_internship= ?;
        INSERT INTO `requires`(`id_internship`, `id_skills`)   
        SELECT internship.id_internship, skills.id_skills 
        FROM `internship`,`skills`  
        WHERE skills.name_skills= ? 
        AND internship.id_compagny=? 
        AND internship.description_internship= ?;
        INSERT INTO `requires`(`id_internship`, `id_skills`)   
        SELECT internship.id_internship, skills.id_skills 
        FROM `internship`,`skills`  
        WHERE skills.name_skills= ? 
        AND internship.id_compagny=? 
        AND internship.description_internship= ?; ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$available,$level,$duration,$pay,$publication,$number,$description,$id_compagny,$skill1,$id_compagny,$description,$skill2,$id_compagny,$description,$skill3,$id_compagny,$description]);
    }
    //modif d'un stage
    public function modify_internship($id_internship,$available,$level,$number,$skill1,$skill2,$skill3,$duration,$pay,$id_compagny,$publication,$description){
        //echo var_dump($available,$level,$number,$skill1,$skill2,$skill3,$beginning,$ending,$pay,$id_compagny,$publication,$description);
        /*$sql = "UPDATE `internship` 
        SET `status_internship`=?,  
        `student_level_internship`=?, 
        `period_internship`=?,  
        `base_pay_internship`=?,  
        `date_publication_internship`=?,  
        `nb_max_student_internship`=?,  
        `description_internship`=?,  
        `id_compagny`=?  
        WHERE id_internship=?; 
        UPDATE `requires`  
        SET `id_skills`=? 
        WHERE requires.id_internship=? LIMIT 1; 
        UPDATE `requires` 
        SET `id_skills`=? 
        WHERE requires.id_internship=?  
        UPDATE `requires`  
        SET `id_skills`=? 
        WHERE requires.id_internship=?;";
        $stmt = $this->connect()->prepare($sql);*/
        $stmt->execute([$available,$level,$duration,$pay,$publication,$number,$description,$id_compagny,$id_internship,$skill1,$id_internship,$skill2,$id_internship,$skill3,$id_internship]);
    }
    //suppression d'un stage
    public function delete_internship($id_internship){
        echo var_dump($id_internship);
        //$sql = "";
        //$stmt = $this->connect()->prepare($sql);
        //$stmt->execute([]);
    }
    public function show_internship(){
    $sql = "SELECT `status_internship`, `student_level_internship`, `period_internship`, `base_pay_internship`, `date_publication_internship`, `nb_max_student_internship`, `description_internship`, `name_compagny` 
    FROM `internship` 
    INNER JOIN `compagny` ON internship.id_compagny = compagny.id_compagny   
    WHERE status_internship = 1";
    $stmt = $this->connect()->query($sql);
    while($row = $stmt->fetch()){
        /*echo $row["status_internship"];
        echo $row["student_level_internship"];
        echo $row["period_internship"];
        echo $row["base_pay_internship"];
        echo $row["date_publication_internship"];
        echo $row["nb_max_student_internship"];
        echo $row["description_internship"];
        echo $row["name_compagny"];
        echo $row["name_skills"];*/
        echo "<div class='col-md-12'>
        <div class='card flex-md-row mb-4 box-shadow h-md-250'>
            <div class='card-img-right d-sm-block' style='width: 50px; height: 50px; background-color: #058995 ;'><i class='fas fa-briefcase fa-3x'></i></div>
            <div class='card-body d-flex flex-column align-items-start'>

              <strong class='d-inline-block mb-2 ' style='color: #058995;'> ".$row["student_level_internship"]." </strong>
              <h3 class='mb-0'> ".$row["name_compagny"]." </h3>
              <h6 class='mb-1 text-muted'> available places : ".$row["nb_max_student_internship"]." </h6>
              <p class='mb-0'> period : ".$row["period_internship"]." </p>
              <p class='card-text mb-auto'> Description : ".$row["description_internship"]." </p>
              <p class='mb-0'> base pay : ".$row["base_pay_internship"]." </p>
              <p class='mb-0 text-muted'> publication date : ".$row["date_publication_internship"]." </p>
            </div>
        </div>
      </div>";
    }
    }
}
?>