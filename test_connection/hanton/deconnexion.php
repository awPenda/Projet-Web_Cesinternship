<?php
//détruit les sessions en cours pour la déconnection total

   session_start();
   session_destroy();
   header("location: http://localhost/Projet_WEB/LogScreen/Sign-in.php");
?>