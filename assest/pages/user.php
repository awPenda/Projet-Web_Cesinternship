<?php
class user extends dbh{
public function add_delegate($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3,$right){
    echo var_dump($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3,$right);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
public function add_pilot($login,$name,$f_name,$pwd,$pilot_status,$promotion){
    echo var_dump($login,$name,$f_name,$pwd,$pilot_status,$promotion);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
public function add_admin($login,$name,$f_name,$pwd,$h_date){
    echo var_dump($login,$name,$f_name,$pwd,$h_date);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
public function add_student($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3){
    echo var_dump($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3);
    //$sql = "";
    //$stmt = $this->connect()->prepare($sql);
    //$stmt->execute([]);
}
}
?>