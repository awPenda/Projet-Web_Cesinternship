<?php

class view_locality extends locality{

    public function show_locality() {
       $datas = $this->get_locality();
       foreach($datas as $data){
            echo $data['id_locality'].'<br>';
            echo $data['zip_code'].'<br>';
            echo $data['city_name'].'<br>';
       }
    }
}

?>