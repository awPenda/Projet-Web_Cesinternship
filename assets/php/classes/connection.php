<?php
class connection extends dbh{
   //connection pour un compte admin
public function conn_admin($login,$pass){
    $sql=$this->connect()->prepare("(Select `user_login`,`user_password` from web_project_database.admin natural join web_project_database.user where `user_login`= ? and `user_password`= ? limit 1)");
      $sql->execute(array($login,$pass));
      $tab=$sql->fetchAll();
      if(count($tab)>0){ //si correlation avec la bdd
         $_SESSION["autoriser"]="oui"; // on aurotise la co avec le $_SERVER qui se propage sur toutes les pages
         header("location:http://localhost/assets/pages/home.php");// on redirige vers la page d'acceuil.
      }
      else
         $erreur="Bad login or password!"; // on prompte un message
         echo '<script language="javascript">';
         echo 'alert("'.$erreur.'")';
         echo '</script>';
}
//connection pour un compte pilote
public function conn_pilot($login,$pass){
   $sql=$this->connect()->prepare("(Select `user_login`,`user_password` from web_project_database.pilot natural join web_project_database.user where `user_login`= ? and `user_password`= ? limit 1)");
     $sql->execute(array());
     $tab=$sql->fetchAll();
     if(count($tab)>0){ //si correlation avec la bdd
        $_SESSION["autoriser"]="oui"; // on aurotise la co avec le $_SERVER qui se propage sur toutes les pages
        header("location:http://localhost/assets/pages/home.php");// on redirige vers la page d'acceuil.
     }
     else
        $erreur="Bad login or password!"; // on prompte un message
        echo '<script language="javascript">';
        echo 'alert("'.$erreur.'")';
        echo '</script>';
}
//connection pour un compte délégué
public function conn_delegate($login,$pass){
   $sql=$this->connect()->prepare("(Select `user_login`, `user_password` from web_project_database.delagate natural join web_project_database.user where `user_login`= ? and `user_password`= ? limit 1)");
     $sql->execute(array($login,$pass));
     $tab=$sql->fetchAll();
     if(count($tab)>0){ //si correlation avec la bdd
        $_SESSION["autoriser"]="oui"; // on aurotise la co avec le $_SERVER qui se propage sur toutes les pages
        header("location:http://localhost/assets/pages/home.php");// on redirige vers la page d'acceuil.
     }
     else
        $erreur="Bad login or password!"; // on prompte un message
        echo '<script language="javascript">';
        echo 'alert("'.$erreur.'")';
        echo '</script>';
}
//connection pour un compte user basique
public function conn_user($login,$pass){
   $sql=$this->connect()->prepare("(Select `user_login`, `user_password` from web_project_database.user where `user_login`= ? and `user_password`= ? limit 1)");
     $sql->execute(array($login,$pass));
     $tab=$sql->fetchAll();
     if(count($tab)>0){ //si correlation avec la bdd
        $_SESSION["autoriser"]="oui"; // on aurotise la co avec le $_SERVER qui se propage sur toutes les pages
        header("location:http://localhost/assets/pages/home.php");// on redirige vers la page d'acceuil.
     }
     else
        $erreur="Bad login or password!"; // on prompte un message
        echo '<script language="javascript">';
        echo 'alert("'.$erreur.'")';
        echo '</script>';
}
}
?>