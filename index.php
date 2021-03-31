<?php
include "./assets/php/classes/DB_class.php";
include "./assets/php/classes/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!--Métadonnée de la page, encodage, et adaptabilité en fonction des écrans-->
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="Cesinternship Sign-in page">
     <meta name="author" content="Amélie WILLEMS">
     <!-- intégration de la feuille CSS de bootstrap -->
     <link rel="stylesheet" href="./assets/vendors/bootstrap/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/css/bootstrap.min.css">
     <!-- Ajout de la librairie pour les icones -->
     <link rel="stylesheet" href="./assets/vendors/fontawesome/fontawesome-free-5.15.1-web/css/all.min.css">
     <!-- Intégration du script jquery -->
     <script src="./assets/vendors/jquery/jquery-3.5.1.min.js"></script>
     <!-- Intégration du script de bootstrap, il doit impérativement être après jquery et popper.js-->
     <script src="./assets/vendors/bootstrap/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js" ></script>
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

     <!-- Lien page de style -->
     <link rel="stylesheet" href="./assets/style/style.css">
     <!-- Titre de la page-->
     <title>Connexion</title>
</head>

<body class="raw">
  
    <nav class="navbar navbar-dark bg-dark">
        <h1 id="Title_cesinternship"><img src="./assets/pictures/Cesinternship.png" alt="Cesinternship" width="250"></h1>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="navbar-collapse collapse" id="navbarsExample01" >
          <p class="text-center" style="color: white;">
            Find your intership with Cesinternship !
          </p>
        </div>
    </nav>


    <div id="main_div" class="text-center">
        <form class="form-signin" method="POST">
            <img class="mb-4" src="./assets/pictures/LOGO.png" alt="LOGO" style="width:50%">
            
            <h2 class="h3 mb-3 font-weight-normal">Please sign in</h2>
  
            <select id="select_type" name="select_type" class="form-select form-select mb-3" aria-label="Select type" required="">
              <option value="">Select a type of account</option>
              <option>Admin</option>
              <option>Pilot</option>
              <option>Delegate</option>
              <option>Student</option>
            </select>

            <!-- <label for="id_user_type" class="sr-only">Email address</label> -->
            <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Username" required="">
            <!-- <label for="input_password" class="sr-only">Password</label> -->
            <input type="password" id="input_password" name="input_password" class="form-control" placeholder="Password" required="" autocomplete>
            
            <button id="sign_in_btn" name="sign_in_btn" class="btn btn-lg btn-block" type="submit">Sign in</button>
        </form>
    </div>

    <?php
//permet à l'utilisateur de s'authentifier 

   session_start(); // tu start toujours la session

   

   if(isset($_POST['sign_in_btn'])){ // si tu appuies sur le bouton se co 
      //@$login=$_POST["login"];
      //@$pass=md5($_POST["pass"]);
      //@$valider=$_POST["valider"];
      $type = $_POST["select_type"];
      if($type == "Admin"){
        $mode = 1;
        $login = $_POST['user_name'];
        $pass = md5($_POST['input_password']);
        //echo $mode;
        //instantiation
        $connection = new connection();
        $connection->conn_admin($login,$pass);
      }
      if($type == "Pilot"){
        $mode = 2;
        $login = $_POST['user_name'];
        $pass = md5($_POST['input_password']);
        //echo $mode;
        //instantiation
        $connection = new connection();
        $connection->conn_pilot($login,$pass);
      }
      if($type == "Delegate"){
        $mode = 3;
        $login = $_POST['user_name'];
        $pass = md5($_POST['input_password']);
        //echo $mode;
        //instantiation
        $connection = new connection();
        $connection->conn_delegate($login,$pass);
      }
      if($type == "Student"){
        $mode = 4;
        $login = $_POST['user_name'];
        $pass = md5($_POST['input_password']);
        //echo $mode;
        //instantiation
        $connection = new connection();
        $connection->conn_user($login,$pass);
      }
   }
?>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2021 Cesinternship</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>

    <script>
      if('serviceWorker' in navigator){
        window.addEventListener('load', () => {
          navigator.serviceWorker.register('/sw.js')
          .then(reg => {
            console.log('Service Worker registered !');
          })
          .catch(err => {
            console.log('Service Worker registration failed :', err);
          });
        });
      }
    </script>

    
</body>
</html>