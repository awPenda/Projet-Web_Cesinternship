<?php
//permet à l'utilisateur de s'authentifier 

   session_start(); // tu start toujours la session

   @$login=$_POST["login"];
   @$pass=md5($_POST["pass"]);
   @$valider=$_POST["valider"];
   $erreur="";

   if(isset($valider)){ // si tu appuies sur le bouton se co 
      include("connexion.php");
      $sel=$pdo->prepare("(Select  nom_ent as 'name',email_ent, mdp from entreprise natural join password where email_ent=? and mdp=? limit 1)  union    
      (Select prenom_etud,email_etud, mdp  from etudiant natural join password where email_etud=? and mdp=? limit 1) union
      (Select prenom_pi,email_pi, mdp  from pilote natural join password where email_pi=? and mdp=? limit 1)");
      $sel->execute(array($login,$pass,$login,$pass,$login,$pass));
      $tab=$sel->fetchAll();
      if(count($tab)>0){ //si correlation avec la bdd
         $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["name"]));
         $_SESSION["autoriser"]="oui"; // on aurotise la co avec le $_SERVER qui se propage sur toutes les pages
         header("location:page.php");// on redirige vers la page d'acceuil.
      }
      else
         $erreur="Bad login or password!"; // on prompte un message
   }
?>

<!-- ton form  -->

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Log-in</title>
   <link rel="icon" type="image/x-icon" href="../../Pictures/logo.png">
   <link rel="stylesheet" type="text/css" href="./Sign-in.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-light" onLoad="document.fo.login.focus()">
   <div class="logo text-center">
      <a href="../Sign-up/SignUp.php">
         <img class="logo__img ng-star-inserted img-fluid" src="../../Pictures/logo.png" alt="">
      </a>
   </div>
   <main>
      <div class=" formulaire container">
         <div class="py-5 text-center">
            <h1>Welcome Back</h1>
         </div>
         <div class="login col-md-7 col-lg-8 container">
            <h4 class="mb-3 text-center">Let's find your next intership</h4>

            <div class="erreur"><?php echo $erreur ?></div>

            <form name="fo" method="post" action="" class="needs-validation was-validated" novalidate="">
               <hr class="my-4">
               <br>
               <br>
               <label class="form-label">Email<span class="text-muted"></span></label>

               <div class=" col-sm-12 ">
                  <div class="input-group">
                     <input type="email" name="login" class="case form-control" placeholder="toi@exemple.com" required="">
                  </div>

                  <br>
                  <label class="form-label">Password</label>
                  <div class="row g-3">
                     <div class="input-group">
                        <input type="password" name="pass" class="case form-control" required="">
                        <div class="invalid-feedback">
                           Password required.
                        </div>
                     </div>
                     <div class="souligne">
                        <a style="text-decoration:none" class="hover mdpoubli"
                           href="#">You forgot your password?</a>
                     </div>
                     <hr class="my-4">
                     <button class="bouton w-100 btn btn-secondary btn-lg" type="submit" name="valider">Log-in</button>
                     <br>
                     <div class="nvcpt">
                        <h5>You don't already have an account?</h5>
                        <div class="souligne">
                           <a style="text-decoration:none" class=" inscription hover mdpoubli"
                              href="SignUp.php">Sign up</a>
                        </div>
                     </div>
                  </div>
               </div>
            </form>

         </div>
      </div>
   </main>
   <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">© 2021 Jobify</p>
      <ul class="list-inline">
         <li class="list-inline-item"><a href="connexion.html">About us</a></li>
      </ul>
   </footer>
</body>

</html>