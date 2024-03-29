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

     <!-- Lien page de style et script fait maison-->
     <link rel="stylesheet" href="../style/style.css">
     <script src="../script/create.js"></script>

     <!-- Titre de la page-->
     <title>Create</title>
</head>

<body class="">
    
<?php
include_once '../php/classes/header.php';
include '../php/classes/DB_class.php';
include '../php/classes/compagny.php';
include '../php/classes/internship.php';
include '../php/classes/user.php';
include "../php/classes/connection.php";
//va empêcher d'autres personnes d'accéder à un contenue sans être connecté

   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:http://localhost/index.php"); // si tu es pas co ça te redirige vers ton ecran de signin
      exit();
   }
?>

    <div class="container col-md-8 col-lg-4">

        <main>
            <div class="jumbotron">

                <div class='text-center'>
                    
                        <h1>Create</h1>

                        <select name="create_select_type" id="create_select_type" class="form-select form-select-lg mb-3" aria-label="Select type">
                            <option value="" selected="selected">Choose what you want to add.</option>
                            <option>Company</option>
                            <option>Internship</option>
                            <option>Admin</option>
                            <option>Pilot</option>
                            <option>Delegate</option>
                            <option>Student</option>
                        </select>
                       
                    
                </div>
                <hr class="mb-4">
                    
            
                <!--Contenu du formulaire-->
                <form class="needs-validation" novalidate="" method="post">
                    
                    <!--Valeurs communes à tous les Users-->
                    <div id="user_attributes">
                        <div class="flex-column">
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" name="user_login" id="user_login" placeholder="Login" value="" required="">
                                <div class="invalid-feedback">
                                    A valid login is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name" value="" required="">
                                <div class="invalid-feedback">
                                    A valid name is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="user_firstname" name="user_firstname" placeholder="Firstname" value="" required="">
                                <div class="invalid-feedback">
                                    A valid firstname is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password" value="" required="">
                                <div class="invalid-feedback">
                                    A valid password is required.
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">
                    </div>

                    <!--Valeurs pour les Etudiants-->
                    <div id="student_attributes">
                        <div class="flex-column">
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="student_high_school" name="student_high_school" placeholder="High-school" value="" required="">
                                <div class="invalid-feedback">
                                    A valid High-school is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="student_promotion" name="student_promotion" placeholder="Promotion" value="" required="">
                                <div class="invalid-feedback">
                                    A valid promotion is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="student_id_wishlist" name="student_id_wishlist" placeholder="Wishlist" value="" required="">
                                <div class="invalid-feedback">
                                    A valid wishlist id is required.
                                </div>
                            </div>



                            <div class="col-md-12 mb-3">
                                <div id="div3_skills">
                                    <label class="text-muted" for="name_first_skill_student">First Skill</label>
                                    <select class="form-select" id="name_first_skill_student" name="name_first_skill_student" required="" >
                                        <option value="">Select one</option>
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
                                    <label class="text-muted" for="name_second_skill_student">Second Skill</label>
                                    <select class="form-select" id="name_second_skill_student" name="name_second_skill_student" required="" >
                                        <option value="">Select one</option>
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
                                    <label class="text-muted" for="name_third_skill_student">Third Skill</label>
                                    <select class="form-select" id="name_third_skill_student" name="name_third_skill_student" required="" >
                                        <option value="">Select one</option>
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
                                </div>
                            </div>


                        </div>

                        <hr class="mb-4">
                        <!--Bouton valider commande-->
                        <button class="btn btn-dark btn-lg btn-block" type="submit" id='btn_valide_student' name='btn_valide_student'>Valider</button>
                    </div>
                    <?php
                    //si le bouton encléché cela lance cette fonction
                    if(isset($_POST['btn_valide_student'])){
                        //recuperation des variables par post
                        $login = $_POST["user_login"];
                        $name = $_POST["user_name"];
                        $f_name = $_POST["user_firstname"];
                        $pwd = md5($_POST["user_password"]);
                        $school = $_POST["student_high_school"];
                        $promotion = $_POST["student_promotion"];
                        $whishlist = $_POST["student_id_wishlist"];
                        $skill1 = $_POST["name_first_skill_student"];
                        $skill2 = $_POST["name_second_skill_student"];
                        $skill3 = $_POST["name_third_skill_student"];
                        //instanciation de la classe pour injeter dans la bdd
                        $admin = new user();
                        $admin->add_student($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3);
                    }
                    ?>

                    <!--Valeurs pour les Délégués-->
                    <div id="delegate_attributes">
                        <div class="flex-column">
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="delegate_high_school" name="delegate_high_school" placeholder="High-school" value="" required="">
                                <div class="invalid-feedback">
                                    A valid High-school is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="delegate_promotion" name="delegate_promotion" placeholder="Promotion" value="" required="">
                                <div class="invalid-feedback">
                                    A valid promotion is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="delegate_id_wishlist" name="delegate_id_wishlist" placeholder="Wishlist" value="" required="">
                                <div class="invalid-feedback">
                                    A valid wishlist id is required.
                                </div>
                            </div>


                            <div class="col-md-12 mb-3">
                                <div id="div1_skills">
                                    <label class="text-muted" for="name_first_skill_delegate">First Skill</label>
                                    <select class="form-select" id="name_first_skill_delegate" name="name_first_skill_delegate" required="" >
                                        <option value="">Select one</option>
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
                                    <label class="text-muted" for="name_second_skill_delegate">Second Skill</label>
                                    <select class="form-select" id="name_second_skill_delegate" name="name_second_skill_delegate" required="" >
                                        <option value="">Select one</option>
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
                                    <label class="text-muted" for="name_third_skill_delegate">Third Skill</label>
                                    <select class="form-select" id="name_third_skill_delegate" name="name_third_skill_delegate" required="" >
                                        <option value="">Select one</option>    
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
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="checkbox" class="form-check-input" id="delegate_right" name="delegate_right" checked value = 'yes'>
                                <label class="form-check-label" for="delegate_right">
                                    Attribute right to the delegate
                                </label>
                            </div>
                        </div>

                        <hr class="mb-4">
                        <!--Bouton valider commande-->
                        <button class="btn btn-dark btn-lg btn-block" type="submit" id='btn_valide_delegate' name='btn_valide_delegate' >Valider</button>
                    </div>
                    <?php
                    //si le bouton encléché cela lance cette fonction
                    if(isset($_POST['btn_valide_delegate'])){
                        //recuperation des variables par post
                        $login = $_POST['user_login'];
                        $name = $_POST['user_name'];
                        $f_name = $_POST['user_firstname'];
                        $pwd = md5($_POST['user_password']);
                        $school = $_POST["delegate_high_school"];
                        $promotion = $_POST["delegate_promotion"];
                        $whishlist = $_POST["delegate_id_wishlist"];
                        $skill1 = $_POST["name_first_skill_delegate"];
                        $skill2 = $_POST["name_second_skill_delegate"];
                        $skill3 = $_POST["name_third_skill_delegate"];
                        $right = $_POST["delegate_right"];
                        //instanciation de la classe pour injeter dans la bdd
                        $admin = new user();
                        $admin->add_delegate($login,$name,$f_name,$pwd,$school,$promotion,$whishlist,$skill1,$skill2,$skill3,$right);
                    }
                    ?>

                    <!--Valeurs pour les Pilotes -->
                    <div id="pilot_attributes">
                        <div class="flex-column">
                            <div class="text-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pilot_status" id="pilot_status_teacher" name="pilot_status_teacher" value="Teacher">
                                    <label class="form-check-label" for="pilot_status_teacher">Teacher</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pilot_status" id="pilot_status_searcher" name="pilot_status_searcher" value="Searcher">
                                    <label class="form-check-label" for="pilot_status_searcher">Searcher</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pilot_status" id="pilot_status_both" name="pilot_status_both" value="Both">
                                    <label class="form-check-label" for="pilot_status_both">Both</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="pilot_promotion" name="pilot_promotion" placeholder="Promotion" value="" required="">
                                <div class="invalid-feedback">
                                    A valid promotion is required.
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">
                        <!--Bouton valider commande-->
                        <button class="btn btn-dark btn-lg btn-block" type="submit" id='btn_valide_pilot' name='btn_valide_pilot'>Valider</button>
                    </div>
                    <?php
                    //si le bouton encléché cela lance cette fonction
                    if(isset($_POST['btn_valide_pilot'])){
                        //recuperation des variables par post
                        $login = $_POST['user_login'];
                        $name = $_POST['user_name'];
                        $f_name = $_POST['user_firstname'];
                        $pwd = md5($_POST['user_password']);
                        $pilot_status = $_POST['pilot_status'];
                        $promotion = $_POST['pilot_promotion'];
                        //instanciation de la classe pour injeter dans la bdd
                        $admin = new user();
                        $admin->add_pilot($login,$name,$f_name,$pwd,$pilot_status,$promotion);
                    }
                    ?>

                     <!--Valeurs pour les Admin -->
                     <div id="admin_attributes">
                        <div class="col-md-12 mb-3">
                            <label class="text-muted" for="hiring_date">Hiring date</label>
                            <input type="date" class="form-control" id="hiring_date" name="hiring_date" required="">
                            <div class="invalid-feedback">
                                A valid date is required.
                            </div>
                        </div>
                        
                        <hr class="mb-4">
                        <!--Bouton valider commande-->
                        <button class="btn btn-dark btn-lg btn-block" type="submit" id='btn_valide_Admin' name='btn_valide_Admin'>Valider</button>
                    </div>
                    <?php
                    //si le bouton encléché cela lance cette fonction
                    if(isset($_POST['btn_valide_Admin'])){
                        //recuperation des variables par post
                        $login = $_POST['user_login'];
                        $name = $_POST['user_name'];
                        $f_name = $_POST['user_firstname'];
                        $pwd = md5($_POST['user_password']);
                        $h_date = $_POST['hiring_date'];
                        //instanciation de la classe pour injeter dans la bdd
                        $admin = new user();
                        $admin->add_admin($login,$name,$f_name,$pwd,$h_date);
                    }
                    ?>


                    <!--Valeurs Compagny-->
                    <div id="compagny_attributes">
                        <div class="flex-column">
                            <div class="col-md-12 mb-3 text-center">
                                <label class="text-muted" for="activity_compagny">activity area</label>
                                <select class="form-select" id="activity_compagny" name="activity_compagny" required="" >
                                    <option value="">Select one</option>
                                    <option>Generalist</option>
                                    <option>Computer science</option>
                                    <option>Construction industry</option>
                                    <option>Onboard systems</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="name_compagny" name="name_compagny"  placeholder="Company name" value="" required="">
                                <div class="invalid-feedback">
                                    A valid name is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="email" class="form-control" id="email_compagny" name="email_compagny" placeholder="email" value="" required="">
                                <div class="invalid-feedback">
                                    A valid email is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="zip_code"
                                    name="zip_code" placeholder="Zip Code" required="">
                                    <div class="invalid-feedback">
                                        Un code postal valide est requis.
                                    </div>
                                    <div class="input-group-append">
                                      <input type="button" class="btn btn-secondary"  id='btn_zip_code'  name='btn_zip_code' value='OK'>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input class="form-control" type="text" placeholder="Town" id="town" name="town">
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="number" class="form-control" id="nb_cesi_internship" name="nb_cesi_internship" placeholder="Number of cesi interns" value="" required="">
                                <div class="invalid-feedback">
                                    A valid number is required.
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">
                        <!--Bouton valider commande-->
                        <button class="btn btn-dark btn-lg btn-block" type="submit" id='btn_valide_compagny' name='btn_validate_compagny'>Valider</button>
                        <?php
                            //lancer des instructions si le bouton est enclenché
                            if(isset($_POST['btn_validate_compagny'])){
                                //récupération des valeurs via la méthode POST
                                $activity = $_POST['activity_compagny'];
                                $compagny_name = $_POST['name_compagny'];
                                $email = $_POST['email_compagny'];
                                $zip_code = $_POST['zip_code'];
                                $town = $_POST['town'];
                                $number_interns = (int)$_POST['nb_cesi_internship'];
                                //instantiation d'un nouvel objet compagny pour l'ajout
                                $compagny = new compagny();
                                $compagny->add_compagny($activity,$compagny_name,$email,$zip_code,$town,$number_interns);
                            }
                        ?>
                     
                    </div>





                    <!--Valeurs stage-->
                    <div id="internship_attributes">
                        <div class="flex-column">
                            <div class="col-md-12 mb-3 ">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="status_internship" name="status_internship"  checked value = "1">
                                    <label class="form-check-label" for="status_internship">Internship available</label>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3 text-center">
                                <label class="text-muted" for="student_level_internship">Student level</label>
                                <select class="form-select" id="student_level_internship" name="student_level_internship" required="" >
                                    <option value="">No level required</option>
                                    <option>Second year</option>
                                    <option>Third year</option>
                                    <option>Fourth year</option>
                                    <option>Fifth year</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="number" class="form-control" id="nb_max_student_internship" name="nb_max_student_internship" placeholder="Number of available internship" value="" required="">
                                <div class="invalid-feedback">
                                    A valid number is required.
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div id="div2_skills">
                                    <label class="text-muted" for="name_first_skill_internship">First Skill</label>
                                    <select class="form-select" id="name_first_skill_internship" name="name_first_skill_internship" required="" >
                                        <option value="">Select one</option>
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
                                    <label class="text-muted" for="name_second_skill_internship">Second Skill</label>
                                    <select class="form-select" id="name_second_skill_internship" name="name_second_skill_internship" required="" >
                                        <option value="">Select one</option>
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
                                    <label class="text-muted" for="name_third_skill_internship">Third Skill</label>
                                    <select class="form-select" id="name_third_skill_internship" name="name_third_skill_internship" required="" >
                                        <option value="">Select one</option>
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
                                </div>
                            </div>



                            <div class="col-md-12 mb-3">
                                <input type="number" class="form-control" placeholder="Duration interneship (in weeks)" step="1" min="1" id="duration_internship" name="duration_internship">
                                <div class="invalid-feedback">
                                    A valid pay is required.
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <input type="number" class="form-control" placeholder="Base pay" step="0.01" min="546.00" id="base_pay_internship" name="base_pay_internship">
                                <div class="invalid-feedback">
                                    A valid pay is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="number" class="form-control" id="id_compagny_internship" name="id_compagny_internship"  placeholder="Id of your company" value="" required="">
                                <div class="invalid-feedback">
                                    A valid number is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="text-muted" for="date_publication_internship">Publication date</label>
                                <input type="date" class="form-control" id="date_publication_internship" name="date_publication_internship" value="" required="">
                                <div class="invalid-feedback">
                                    A valid date is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" id="description_internship" name="description_internship" placeholder="Description internship" required=""></textarea>
                                <div class="invalid-feedback">
                                    A valid text is required.
                                </div>
                            </div>

                           
                        </div>

                        <hr class="mb-4">
                        <!--Bouton valider commande-->
                        <button class="btn btn-dark btn-lg btn-block" type="submit" id='btn_valide_internship' name='btn_valide_internship'>Valider</button>
                     
                    </div>
                    <?php
                    //lancer des instructions si le bouton est enclenché
                    if(isset($_POST['btn_valide_internship'])){
                    //récupération des valeurs via la méthode POST
                    $available = $_POST["status_internship"];
                    $level = $_POST["student_level_internship"];
                    $number =$_POST["nb_max_student_internship"];
                    $skill1 = $_POST["name_first_skill_internship"];
                    $skill2 = $_POST["name_second_skill_internship"];
                    $skill3 = $_POST["name_third_skill_internship"];
                    $duration = $_POST["duration_internship"];
                    $pay = $_POST["base_pay_internship"];
                    $id_compagny = $_POST["id_compagny_internship"];
                    $publication = $_POST["date_publication_internship"];
                    $description = $_POST["description_internship"];
                    //instantiation pour ajouter a la bdd
                    $internship = new internship();
                    $internship->add_internship($available,$level,$number,$skill1,$skill2,$skill3,$duration,$pay,$id_compagny,$publication,$description);
                    }
                    ?>



                    
                    
                    <button class="btn btn-sm btn-block" type="reset" id='reset' name='reset'>Reset</button>
                </form>

            </div>
        </main>

        <hr class="mb-4">

        <?php
          include_once '../php/classes/footer.php'
        ?>

      </div>

</body>
</html>