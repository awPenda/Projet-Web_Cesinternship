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
include_once 'header.php'
?>

    <div class="container col-md-8 col-lg-4">

        <main role="main">
            <div class="jumbotron">

                <div class='text-center'>
                    
                        <h1>Create</h1>

                        <select id="create_select_type" class="form-select form-select-lg mb-3" aria-label="Select type" required="">
                            <option selected="selected">Choose what you want to add.</option>
                            <option>Compagny</option>
                            <option>Internship</option>
                            <option>Admin</option>
                            <option>Pilot</option>
                            <option>Delegate</option>
                            <option>Student</option>
                        </select>
                       
                    
                </div>
                <hr class="mb-4">
                    
            
                <!--Contenu du formulaire-->
                <form class="needs-validation" novalidate="">
                    
                    <!--Valeurs communes à tous les Users-->
                    <div id="user_attributes">
                        <div class="flex-column">
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="user_login" placeholder="Login" value="" required="">
                                <div class="invalid-feedback">
                                    A valid login is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="user_name" placeholder="Name" value="" required="">
                                <div class="invalid-feedback">
                                    A valid name is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="user_firstname" placeholder="Firstname" value="" required="">
                                <div class="invalid-feedback">
                                    A valid firstname is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="password" class="form-control" id="user_password" placeholder="Password" value="" required="">
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
                                <input type="text" class="form-control" id="student_high_school" placeholder="High-school" value="" required="">
                                <div class="invalid-feedback">
                                    A valid High-school is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="student_promotion" placeholder="Promotion" value="" required="">
                                <div class="invalid-feedback">
                                    A valid promotion is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="id_wishlist" placeholder="Wishlist" value="" required="">
                                <div class="invalid-feedback">
                                    A valid wishlist id is required.
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">
                        <!--Bouton valider commande-->
                        <button class="btn btn-dark btn-lg btn-block" type="submit" id='btn_valide_student'>Valider</button>
                    </div>

                    <!--Valeurs pour les Délégués-->
                    <div id="delegate_attributes">
                        <div class="flex-column">
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="student_high_school" placeholder="High-school" value="" required="">
                                <div class="invalid-feedback">
                                    A valid High-school is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="student_promotion" placeholder="Promotion" value="" required="">
                                <div class="invalid-feedback">
                                    A valid promotion is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="id_wishlist" placeholder="Wishlist" value="" required="">
                                <div class="invalid-feedback">
                                    A valid wishlist id is required.
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="checkbox" class="form-check-input" id="delegate_right" checked>
                                <label class="form-check-label" for="delegate_right">
                                    Attribute right to the delegate
                                </label>
                            </div>
                        </div>

                        <hr class="mb-4">
                        <!--Bouton valider commande-->
                        <button class="btn btn-dark btn-lg btn-block" type="submit" id='btn_valide_delegate'>Valider</button>
                    </div>

                    <!--Valeurs pour les Pilotes -->
                    <div id="pilot_attributes">
                        <div class="flex-column">
                            <div class="text-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pilot_status" id="pilot_status_teacher">
                                    <label class="form-check-label" for="pilot_status_teacher">Teacher</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pilot_status" id="pilot_status_searcher">
                                    <label class="form-check-label" for="pilot_status_searcher">Searcher</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pilot_status" id="pilot_status_both">
                                    <label class="form-check-label" for="pilot_status_both">Both</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="student_promotion" placeholder="Promotion" value="" required="">
                                <div class="invalid-feedback">
                                    A valid promotion is required.
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">
                        <!--Bouton valider commande-->
                        <button class="btn btn-dark btn-lg btn-block" type="submit" id='btn_valide_pilot'>Valider</button>
                    </div>

                     <!--Valeurs pour les Admin -->
                     <div id="admin_attributes">
                        <div class="col-md-12 mb-3">
                            <label class="text-muted" for="hiring_date">Hiring date</label>
                            <input type="date" class="form-control" id="hiring_date" required="">
                            <div class="invalid-feedback">
                                A valid date is required.
                            </div>
                        </div>
                        
                        <hr class="mb-4">
                        <!--Bouton valider commande-->
                        <button class="btn btn-dark btn-lg btn-block" type="submit" id='btn_valide_pilot'>Valider</button>
                    </div>




                    <!--Valeurs Compagny-->
                    <div id="compagny_attributes">
                        <div class="flex-column">
                            <div class="col-md-12 mb-3 text-center">
                                <label class="text-muted" for="activity_compagny">activity area</label>
                                <select class="form-select" id="activity_compagny" required="" >
                                    <option value="">Generalist</option>
                                    <option>Computer Science</option>
                                    <option>construction industry</option>
                                    <option>onboard systems</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="name_compagny" placeholder="Compagny name" value="" required="">
                                <div class="invalid-feedback">
                                    A valid name is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="email" class="form-control" id="email_compagny" placeholder="email" value="" required="">
                                <div class="invalid-feedback">
                                    A valid email is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="zip_code" placeholder="Zip Code" required="">
                                    <div class="invalid-feedback">
                                        Un code postal valide est requis.
                                    </div>
                                    <div class="input-group-append">
                                      <input type="button" class="btn btn-secondary"  id='btn_zip_code' value='OK'>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input class="form-control" type="text" placeholder="Town" id="town" readonly>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="number" class="form-control" id="nb_cesi_internship" placeholder="Number of cesi interns" value="" required="">
                                <div class="invalid-feedback">
                                    A valid number is required.
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">
                        <!--Bouton valider commande-->
                        <button class="btn btn-dark btn-lg btn-block" type="submit" id='btn_valide_compagny'>Valider</button>
                     
                    </div>





                    <!--Valeurs stage-->
                    <div id="internship_attributes">
                        <div class="flex-column">
                            <div class="col-md-12 mb-3 ">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="status_internship" checked>
                                    <label class="form-check-label" for="status_internship">Internship available</label>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3 text-center">
                                <label class="text-muted" for="student_level_internship">Student level</label>
                                <select class="form-select" id="student_level_internship" required="" >
                                    <option value="">No level required</option>
                                    <option>Second year</option>
                                    <option>Third year</option>
                                    <option>Fourth year</option>
                                    <option>Fifth year</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="number" class="form-control" id="nb_max_student_internship" placeholder="Number of available internship" value="" required="">
                                <div class="invalid-feedback">
                                    A valid number is required.
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div id="div_skills">
                                    <label class="text-muted" for="name_first_skill_internship">First Skill</label>
                                    <select class="form-select" id="name_first_skill_internship" required="" >
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
                                    <select class="form-select" id="name_second_skill_internship" required="" >
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
                                    <select class="form-select" id="name_third_skill_internship" required="" >
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



                            <div class="row" id="div_date_internship">
                                <div class="col-md-6 col-sm-6 mb-3">
                                    <label class="text-muted" for="period_internship_beginning">beginning</label>
                                    <input type="date" class="form-control" id="period_internship_beginning" placeholder="period internship beginning" value="" required="">
                                    <div class="invalid-feedback">
                                        A valid date is required.
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 mb-3">
                                    <label class="text-muted" for="period_internship_ending">Ending</label>
                                    <input type="date" class="form-control" id="period_internship_ending" placeholder="period internship ending" value="" required="">
                                    <div class="invalid-feedback">
                                        A valid date is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="number" class="form-control" placeholder="Base pay" step="0.01" min="546.00" id="base_pay_internship">
                                <div class="invalid-feedback">
                                    A valid pay is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="number" class="form-control" id="id_compagny_internship" placeholder="Id of your compagny" value="" required="">
                                <div class="invalid-feedback">
                                    A valid number is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="text-muted" for="date_publication_internship">Publication date</label>
                                <input type="date" class="form-control" id="date_publication_internship" placeholder="date publication internship" value="" required="">
                                <div class="invalid-feedback">
                                    A valid date is required.
                                </div>
                            </div>

                           
                        </div>

                        <hr class="mb-4">
                        <!--Bouton valider commande-->
                        <button class="btn btn-dark btn-lg btn-block" type="submit" id='btn_valide_compagny'>Valider</button>
                     
                    </div>



                    
                    
                    <button class="btn btn-sm btn-block" type="reset" id='reset' >Reset</button>
                </form>

            </div>
        </main>

        <hr class="mb-4">

        <?php
          include_once 'footer.php'
        ?>

      </div>

</body>
</html>