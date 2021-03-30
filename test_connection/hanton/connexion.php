<?php
//contient la connexion


   try{
      $pdo=new PDO("mysql:host=localhost;dbname=test_dump","root","");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>