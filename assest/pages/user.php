<?php
class user extends dbh{
    //fonctions délégués
public function add_delegate($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3,$right){
    echo var_dump($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3,$right);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
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
//////////////////////////////////////////////////////////////////////////

// fonctions pilote
public function add_pilot($login,$name,$f_name,$pwd,$pilot_status,$promotion){
    echo var_dump($login,$name,$f_name,$pwd,$pilot_status,$promotion);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
public function modify_pilot($id_pilot,$login,$name,$f_name,$pwd,$pilot_status,$promotion){
    echo var_dump($id_pilot,$login,$name,$f_name,$pwd,$pilot_status,$promotion);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
public function delete_pilot($id_pilot){
    echo var_dump($id_pilot);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
//////////////////////////////////////////////////////////////////////////

//fonctions pour les admin
public function add_admin($login,$name,$f_name,$pwd,$h_date){
    echo var_dump($login,$name,$f_name,$pwd,$h_date);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
public function modify_admin($id_admin,$login,$name,$f_name,$pwd,$h_date){
    echo var_dump($id_admin,$login,$name,$f_name,$pwd,$h_date);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
public function delete_admin($id_admin){
    echo var_dump($id_admin);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
//////////////////////////////////////////////////////////////////////////

public function add_student($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3){
    echo var_dump($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
public function modify_student($id_student,$login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3){
    echo var_dump($id_student,$login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
public function delete_student($id_student){
    echo var_dump($id_student);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
}
?>