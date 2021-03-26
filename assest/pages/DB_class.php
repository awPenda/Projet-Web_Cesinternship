<?php

//classe dbh permettant la connection a la bdd
class dbh {
    private $host = "localhost";
    private $username = "root";
    private $password = "cesi";
    private $db_name = "web_project_database";

    protected function connect(){
        $dsn ='mysql:host='.$this->host.'; dbname='.$this->db_name;
        $pdo = new PDO($dsn,$this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
    
}
?>