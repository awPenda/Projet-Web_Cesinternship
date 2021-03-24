<?php

//classe dbh permettant la connection a la bdd
class dbh {
    private $server_name;
    private $username;
    private $password;
    private $db_name;

    protected function connect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "cesi";
        $this->db_name = "web_project_database";

        $connection = new mysqli($this->servername, $this->username, $this->password, $this->db_name);
        
        return $connection;
    }
}

?>