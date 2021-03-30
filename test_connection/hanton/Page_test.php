<?php
//va empêcher d'autres personnes d'accéder à un contenue sans être connecté

   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:http://localhost/Projet_WEB/LogScreen/Sign-in.php"); // si tu es pas co ça te redirige vers ton ecran de signin
      exit();
   }
?>



// ton code html