<?php
class user extends dbh{
    //fonctions délégués
public function add_delegate($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3,$right){
    $rand = rand (10 ,100000000000000000);
    //echo var_dump($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3,$right);
    /*$sql = "INSERT INTO `user`(`id_user`, `user_login`, `user_name`, `user_first_name`, `user_password`) 
    VALUES ('',?,?,?,?);   
    INSERT INTO `student`(`id_user`, `id_student`, `student_high_school`, `user_login`, `user_name`, `user_first_name`, `user_password`, `id_wishlist`)     
    SELECT id_user,?,?,user_login,user_name,user_first_name,user_password, NULL   
    FROM user    
    WHERE user.user_name =?      
    AND user.user_password=?;
    INSERT INTO `delagate`(`id_user`, `id_student`, `id_delegate`, `delegate_right`, `user_login`, `user_name`, `user_first_name`, `user_password`, `student_high_school`, `id_wishlist`) 
    SELECT id_user,id_student,?,?,user_login,user_name,user_first_name,user_password,student_high_school,id_wishlist 
    FROM student 
    WHERE `user_login` =?  LIMIT 1;";*/
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([$login,$name,$f_name,$pwd,$rand,$school,$name,$pwd,$rand,$right,$login]);
}
public function modify_delegate($id_delegate,$login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3,$right){
    echo var_dump($id_delegate,$login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3,$right);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
public function delete_delegate($id_delegate){
    echo var_dump($id_delegate);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
public function show_delegate(){
    $sql = "SELECT delagate.user_name, delagate.user_first_name, promotion.name_promotion, locality.city_name, delagate.student_high_school, delagate.delegate_right 
    FROM `promotion` 
    LEFT JOIN delagate 
    ON promotion.id_delegate=delagate.id_delegate  
    LEFT JOIN locality ON promotion.id_locality=locality.id_locality ";
    $stmt = $this->connect()->query($sql);
    while($row = $stmt->fetch()){
        echo "<div class='col-md-12'>
        <div class='card flex-md-row mb-4 box-shadow h-md-250'>
            <div class='card-img-right d-sm-block' style='width: 50px; height: 50px; background-color: #82C4C9 ;'><i class='fas fa-user-shield fa-3x'></i></div>
            <div class='card-body d-flex flex-column align-items-start' >

              <strong class='d-inline-block mb-2 ' style='color: #82C4C9;'> ".$row["name_promotion"]." </strong>
              <h3 class='mb-0'> ".$row["user_name"]." ".$row["user_first_name"]." </h3>
              <h6 class='mb-1 text-muted'> High-school : ".$row["student_high_school"]." </h6>
              <p class='mb-0 text-muted'> delegate right : ".$row["delegate_right"]." </p>


            </div>
        </div>
      </div>";
    }
}
//////////////////////////////////////////////////////////////////////////

// fonctions pilote
public function add_pilot($login,$name,$f_name,$pwd,$pilot_status,$promotion){
    //echo var_dump($login,$name,$f_name,$pwd,$pilot_status,$promotion);
    $sql = "INSERT INTO `user`(`id_user`, `user_login`, `user_name`, `user_first_name`, `user_password`)  
    VALUES ('',?,?,?,?); 
    INSERT INTO `pilot`(`id_user`, `id_pilot`, `pilot_status`, `user_login`, `user_name`, `user_first_name`, `user_password`) 
    SELECT `id_user`, '', ?, `user_login`, `user_name`, `user_first_name`, `user_password`  
    FROM `user` 
    WHERE user.user_login=? 
    AND user.user_password=?; ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$login,$name,$f_name,$pwd,$pilot_status,$login,$pwd]);
}
public function modify_pilot($id_pilot,$login,$name,$f_name,$pwd,$pilot_status,$promotion,$id_user){
    //echo var_dump($id_pilot,$login,$name,$f_name,$pwd,$pilot_status,$promotion);
    $sql = "UPDATE `user` 
    SET  
    `user_login`=?, 
    `user_name`=?, 
    `user_first_name`=?, 
    `user_password`=? 
    WHERE user.id_user=?;     
    UPDATE `pilot`  
    SET  
    `pilot_status`=?, 
    `user_login`=?, 
    `user_name`=?, 
    `user_first_name`=?, 
    `user_password`=? 
    WHERE pilot.id_pilot=?; ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$login,$name,$f_name,$pwd,$id_user,$pilot_status,$login,$name,$f_name,$pwd,$id_pilot]);
}
public function delete_pilot($id_pilot,$id_user){
    //echo var_dump($id_pilot);
    $sql = "DELETE FROM `pilot` WHERE pilot.id_pilot=?; 
    DELETE FROM `user` WHERE user.id_user=?; ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_pilot,$id_user]);
}
public function show_pilot(){
    $sql = "SELECT  pilot.user_name,pilot.user_first_name, pilot_status, promotion.name_promotion 
    FROM `pilot` 
    Left JOIN promotion  
    ON pilot.id_pilot=promotion.id_pilot ";
    $stmt = $this->connect()->query($sql);
    while($row = $stmt->fetch()){
        //echo $row['user_name'].'<br>';
        //echo $row['user_first_name'].'<br>';
        //echo $row['pilot_status'].'<br>';
        echo "<div class='col-md-12'>
        <div class='card flex-md-row mb-4 box-shadow h-md-250'>
            <div class='card-img-right d-sm-block' style='width: 50px; height: 50px; background-color: #69B8BF ;'><i class='fas fa-chalkboard-teacher fa-2x'></i></div>
            <div class='card-body d-flex flex-column align-items-start'>

              <strong class='d-inline-block mb-2' style='color: #69B8BF;'>Searcher or Teacher: ".$row['pilot_status']." </strong>
              <h3 class='mb-0'>".$row['user_name']." ".$row['user_first_name']." </h3>

            </div>
        </div>
      </div>";
    }
}
//////////////////////////////////////////////////////////////////////////

//fonctions pour les admin
public function add_admin($login,$name,$f_name,$pwd,$h_date){
    //echo var_dump($login,$name,$f_name,$pwd,$h_date);
    $sql = "INSERT INTO `user`(`id_user`, `user_login`, `user_name`, `user_first_name`, `user_password`)   
    VALUES ('',?,?,?,?);   
    INSERT INTO `admin`(`id_user`, `id_admin`, `hiring_date`, `user_login`, `user_name`, `user_first_name`, `user_password`)  
    SELECT id_user,'',?,user_login, user_name,user_first_name,user_password  
    FROM user  
    WHERE user_name=? LIMIT 1; ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$login,$name,$f_name,$pwd,$h_date,$name]);
}
public function modify_admin($id_admin,$login,$name,$f_name,$pwd,$h_date,$id_user){
    //echo var_dump($id_admin,$login,$name,$f_name,$pwd,$h_date);
    $sql = "UPDATE `admin`  
    SET    
    admin.user_login= ?,   
    admin.user_name=?,   
    admin. user_first_name=?,   
    admin. user_password=?,   
    admin. hiring_date=?  
    WHERE admin.id_admin=?;       
    UPDATE `user`   
    SET   
    user.user_login= ?,   
    user.user_name=?,   
    user.user_first_name=?,
    user.user_password= ?
    WHERE user.id_user=?  
    LIMIT 1; ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$login,$name,$f_name,$pwd,$h_date,$id_admin,$login,$name,$f_name,$pwd,$id_user]);
}
public function delete_admin($id_admin,$id_user){
    //echo var_dump($id_admin);
    $sql = "DELETE FROM `admin` WHERE id_admin=?; 
    DELETE FROM `user` WHERE id_user=?; 
    ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_admin,$id_user]);
}
//////////////////////////////////////////////////////////////////////////
//fonctions étudiant
public function add_student($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3){
    //echo var_dump($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3);
    srand ( 52588 );
    $rand = rand (10 ,100000000000000000);
    $sql = "INSERT INTO `user`(`id_user`, `user_login`, `user_name`, `user_first_name`, `user_password`) 
    VALUES ('',?,?,?,?);   
    INSERT INTO `student`(`id_user`, `id_student`, `student_high_school`, `user_login`, `user_name`, `user_first_name`, `user_password`, `id_wishlist`)     
    SELECT id_user,?,?,user_login,user_name,user_first_name,user_password, NULL   
    FROM user    
    WHERE user.user_name =?      
    AND user.user_password=?  
    LIMIT 1;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$login,$name,$f_name,$pwd,$rand,$school,$name,$pwd]);
}
public function modify_student($id_user,$id_student,$login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3){
    //echo var_dump($id_student,$login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3);
    $sql = "UPDATE `user` 
    SET  
    `user_login`=?, 
    `user_name`=?, 
    `user_first_name`=?, 
    `user_password`=? 
    WHERE id_user=?; 
    UPDATE `student` 
    SET 
    `student_high_school`=?, 
    `user_login`=?, 
    `user_name`=?, 
    `user_first_name`=?, 
    `user_password`=? 
    WHERE id_user=?; ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$login,$name,$f_name,$pwd,$id_user,$school,$login,$name,$f_name,$pwd,$id_user]);
}
public function delete_student($id_user){
    //echo var_dump($id_student);
    $sql = "DELETE FROM `student`   
    WHERE student.id_user=?;  
    DELETE FROM `user`  
    WHERE user.id_user=?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_user,$id_user]);
}
public function show_student(){
    $sql = "SELECT  student.student_high_school,student.user_name, student.user_first_name, promotion.name_promotion, locality.city_name 
    FROM `promotion`  
    LEFT JOIN student 
    ON promotion.id_student=student.id_student 
    LEFT JOIN locality 
    ON promotion.id_locality=locality.id_locality ";
    $stmt = $this->connect()->query($sql);
    while($row = $stmt->fetch()){
        //echo $row["student_high_school"];
        //echo $row["user_name"];
        //echo $row["user_first_name"];
        //echo $row["name_promotion"];
        //echo $row["city_name"];
        echo "
        <div class='col-md-12'>
        <div class='card flex-md-row mb-4 box-shadow h-md-250'>
            <div class='card-img-right d-sm-block' style='width: 50px; height: 50px; background-color: #9BCFD4;'><i class='fas fa-user-graduate fa-3x'></i></div>
            <div class='card-body d-flex flex-column align-items-start'>

              <strong class='d-inline-block mb-2 ' style='color: #9BCFD4;'> ".$row["name_promotion"]." </strong>
              <h3 class='mb-0'> ".$row["user_name"]." ".$row["user_first_name"]." </h3>
              <h6 class='mb-1 text-muted'> High-school : ".$row["student_high_school"]." </h6>
            </div>
            </div>
        </div>
        </div>";
    }
}
}
?>