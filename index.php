<!DOCTYPE html>
<html lang="en">
<head>
     <!--Métadonnée de la page, encodage, et adaptabilité en fonction des écrans-->
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="Cesinternship Sign-in page">
     <meta name="author" content="Amélie WILLEMS">
     <!-- intégration de la feuille CSS de bootstrap -->
     <link rel="stylesheet" href="./assest/vendors/bootstrap/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/css/bootstrap.min.css">
     <!-- Ajout de la librairie pour les icones -->
     <link rel="stylesheet" href="./assest/vendors/fontawesome/fontawesome-free-5.15.1-web/css/all.min.css">
     <!-- Intégration du script jquery -->
     <script src="./assest/vendors/jquery/jquery-3.5.1.min.js"></script>
     <!-- Intégration du script de bootstrap, il doit impérativement être après jquery et popper.js-->
     <script src="./assest/vendors/bootstrap/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js" ></script>
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

     <!-- Lien page de style -->
     <link rel="stylesheet" href="./assest/style/style.css">
     <!-- Titre de la page-->
     <title>Connexion</title>
</head>

<body class="raw">
  
    <nav class="navbar navbar-dark bg-dark">
        <h1 id="Title_cesinternship"><img src="./assest/pictures/Cesinternship.png" alt="Cesinternship" width="250"></h1>
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
        <form class="form-signin">
            <img class="mb-4" src="./assest/pictures/LOGO.png" alt="LOGO" style="width:50%">
            
            <h2 class="h3 mb-3 font-weight-normal">Please sign in</h2>
            <label for="input_email" class="sr-only">Email address</label>
            <input type="email" id="input_email" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="input_password" class="sr-only">Password</label>
            <input type="password" id="input_password" class="form-control" placeholder="Password" required="">
            
            <button id="sign_in_btn" class="btn btn-lg btn-block" type="submit">Sign in</button>
        </form>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2021 Cesinternship</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>

    
</body>
</html>