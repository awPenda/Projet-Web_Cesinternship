<?php
include "../php/classes/DB_class.php";
include "../php/classes/connection.php";
include "../php/classes/user.php";
include "../php/classes/compagny.php";
include "../php/classes/internship.php";

//va empêcher d'autres personnes d'accéder à un contenue sans être connecté


   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:../index.php"); // si tu es pas co ça te redirige vers ton ecran de signin
      exit();
   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <!--Métadonnée de la page, encodage, et adaptabilité en fonction des écrans-->
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="Cesinternship Home page">
     <meta name="author" content="Amélie WILLEMS">
     <!-- intégration de la feuille CSS de bootstrap -->
     <link rel="stylesheet" href="../vendors/bootstrap/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/css/bootstrap.min.css">
     <!-- Ajout de la librairie pour les icones -->
     <link rel="stylesheet" href="../vendors/fontawesome/fontawesome-free-5.15.1-web/css/all.min.css">
     <!-- Intégration du script jquery -->
     <script src="../vendors/jquery/jquery-3.5.1.min.js"></script>
     <!-- Intégration du script de bootstrap, il doit impérativement être après jquery et popper.js-->
     <script src="../vendors/bootstrap/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js" ></script>
     <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

     <!-- Lien page de style & script-->
     <link rel="stylesheet" href="../style/home_style.css">
     <script src="../script/home.js"></script>
     <!-- Titre de la page-->
     <title>Home</title>
</head>

<body class="raw">

        <?php
          include_once '../php/classes/header.php'
        ?>


          <!-- try to include données de session, but that not work 

            <p class="text-center" style="color: black;">
                <?php /*
                include_once '../php/classes/connection.php';

                echo 'Hello ' .$_SESSION["name"]. ' Welcome !';

                echo $_SESSION["autoriser"];

                echo $_SESSION["autoriser"];

                echo $_SESSION["whislist"];
                */
                ?>
            </p>
          -->
    

        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded justify-content-center">
            <form class="form-inline justify-content-center" method="POST">
              <div class="">
                  <!-- Select pour choisir ce qu'on va chercher -->
                  <select class="custom-select d-block col-sm" id="search_select_type" name="search_select_type" required="">
                    <option value="">Type</option>
                    <option>Company</option>
                    <option>Internship</option>
                    <option>Pilot</option>
                    <option>Delegate</option>
                    <option>Student</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>
                <!-- div pour la recherche d'entreprise -->
                <div id="search_compagny_div"  >
                  <div class="form-inline">
                    <input class="form-control col-sm-2" id="search_id_compagny" name="search_id_compagny" type="number" placeholder="id" aria-label="id">
                    <input class="form-control col-sm-2" id="search_name_compagny" name="search_name_compagny" type="text" placeholder="Name" aria-label="name">
                    <select class="form-select col-sm-3" id="search_activity_compagny" name="search_activity_compagny">
                      <option value="">activity area</option>
                      <option>Generalist</option>
                      <option>Computer Science</option>
                      <option>construction industry</option>
                      <option>onboard systems</option>
                    </select>
                    <input class="form-control col-sm-2" id="search_zipcode_compagny" name="search_zipcode_compagny" type="text" placeholder="ZipCode" aria-label="zipcode">
                    <input class="form-control col-sm-3" id="search_cesi_interns_compagny" name="search_cesi_interns_compagny" type="number" placeholder="cesi interns" aria-label="nbcesiinterns">
                  </div>
                </div>
                <!-- div pour la recherche de stage -->
                <div id="search_internship_div">
                  <div class="form-inline">
                    <select class="form-select col-sm-2" id="search_student_level_internship" name="search_student_level_internship">
                      <option value="">Level</option>
                      <option>Second year</option>
                      <option>Third year</option>
                      <option>Fourth year</option>
                      <option>Fifth year</option>
                    </select>
                    <input class="form-control col-sm-4" id="search_available" name="search_available" type="number" placeholder="available places" aria-label="available places">
                    <select class="form-select col-sm-2" id="name_first_skill_internship" name="name_first_skill_internship">
                      <option value="">Skill</option>
                      <option>Analytical</option>
                      <option>Creative Thinking</option>
                      <option>Logical Thinking</option>
                      <option>Problem Solving</option>
                      <option>Administrative</option>
                      <option>Business Intelligence</option>
                      <option>Customer Service</option>
                      <option>Microsoft Office Skills</option>
                      <option>Active Listening</option>
                      <option>Communication</option>
                      <option>Collaboration</option>
                      <option>Flexibility</option>
                      <option>Interpersonal</option>
                      <option>Presentation</option>
                      <option>Writing</option>
                      <option>Leadership</option>
                      <option>Management</option>
                      <option>Strategic Planning</option>
                      <option>Motivational</option>
                      <option>Organizational</option>
                      <option>Multitasking</option>
                      <option>Time Management</option>
                      <option>Persuasive</option>
                      <option>Conflict Resolution</option>
                      <option>Teamwork</option>
                    </select>        

                    <input class="form-control col-sm-2" id="search_base_pay_internship" name="search_base_pay_internship" type="number" placeholder="Base pay" aria-label="Base pay">
                    <input class="form-control col-sm-2" id="search_compagny_internship" name="search_compagny_internship" type="text" placeholder="Company" aria-label="Compagny internship">
                  
                    <div class="form-inline form-control col-sm-4 text-muted">
                      <input class="form-check-input " type="checkbox" value="" id="search_available_internship" name="search_available_internship" checked>
                      available
                    </div>
                  </div>
                </div>

                <!-- caractéristiques pour la recherche du pilote -->
                <div id="search_pilot_div">
                  <div class="form-inline">
                    <input class="form-control col-sm-6" id="search_name_pilot" name="search_name_pilot" type="text" placeholder="Name" aria-label="name">
                    <input class="form-control col-sm-6" id="search_first_name_pilot" name="search_first_name_pilot" type="text" placeholder="Firstname" aria-label="firstname">
                  </div>
                </div>
                

                <!-- caractéristiques pour la recherche d'un délégué -->
                <div id="search_delegate_div">
                  <div class="form-inline">
                    <input class="form-control col-sm-6" id="search_name_delegate" name="search_name_delegate" type="text" placeholder="Name" aria-label="name">
                    <input class="form-control col-sm-6" id="search_first_name_delegate" name="search_first_name_delegate" type="text" placeholder="Firstname" aria-label="firstname">
                    <input class="form-control col-sm-6" id="search_promotion_delegate" name="search_promotion_delegate" type="text" placeholder="Promotion" aria-label="promotion">
                    <input class="form-control col-sm-6" id="search_centre_locality_delegate" name="search_centre_locality_delegate" type="text" placeholder="Centre" aria-label="centre">
                  </div>
                </div>
                <!-- caractéristiques pour la recherche d'un étudiant -->
                <div id="search_student_div">
                  <div class="form-inline">
                    <input class="form-control col-sm-6" id="search_name_student" name="search_name_student" type="text" placeholder="Name" aria-label="name">
                    <input class="form-control col-sm-6" id="search_first_name_student" name="search_first_name_student" type="text" placeholder="Firstname" aria-label="firstname">
                    <input class="form-control col-sm-6" id="search_promotion_student" name="search_promotion_student" type="text" placeholder="Promotion" aria-label="promotion">
                    <input class="form-control col-sm-6" id="search_centre_locality_student" name="search_centre_locality_student" type="text" placeholder="Centre" aria-label="centre">
                  </div>
                </div>

                <div class="">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search_btn" name="search_btn"><i class="fas fa-search fa-2x"></i></button>
                </div>

            </form>
        </nav>
 

    <div class="container col-md-10 ">
  
        <hr class="mb-4">
    
        <main>


          
        </main>
        <?php
                  if(isset($_POST["search_btn"])){
                    $type = $_POST['search_select_type'];
                    //echo '<script language="javascript">';
                    //echo 'alert("'.$type.'")';
                    //echo '</script>';
                    if($type == "Pilot"){
                      
                      $show = new user();
                      $show->show_pilot();
                    }
                    if($type == "Company"){
                      
                      $show = new compagny();
                      $show->show_compagny();
                    }
                    if($type == "Internship"){
                      
                      $show = new internship();
                      $show->show_internship();
                    }
                    if($type == "Student"){
                      
                      $show = new user();
                      $show->show_student();
                    }
                    if($type == "Delegate"){
                      
                      $show = new user();
                      $show->show_delegate();
                    }
                  }
                ?>

        <hr class="mb-4">
        <?php
          include_once '../php/classes/wishlist.php';
          include_once '../php/classes/footer.php';
        ?>

    </div>



    
    

    
</body>
</html>