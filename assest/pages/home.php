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
     <link rel="stylesheet" href="../style/style.css">
     <script src="../script/home.js"></script>
     <!-- Titre de la page-->
     <title>Home</title>
</head>

<body class="raw">

        <?php
          include_once 'header.php'
        ?>
    

  <div class="d-flex justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">


          
          
  
          <div class="">
            

            <form class="form-inline justify-content-lg-center">

              <div id="search_compagny_div" class="form-inline">
                <input class="form-control col-sm-2" id="search_id_compagny" type="number" placeholder="id" aria-label="id">
                <input class="form-control col-sm-2" id="search_name_compagny" type="text" placeholder="Name" aria-label="name">
                <select class="form-select col-sm-3" id="search_activity_compagny" required="" >
                  <option>activity area</option>
                  <option>Generalist</option>
                  <option>Computer Science</option>
                  <option>construction industry</option>
                  <option>onboard systems</option>
                </select>
                <input class="form-control col-sm-2" id="search_zipcode_compagny" type="text" placeholder="ZipCode" aria-label="zipcode">
                <input class="form-control col-sm-3" id="search_cesi_interns_compagny" type="number" placeholder="cesi interns" aria-label="nbcesiinterns">
              </div>

              <div id="search_internship_div" class="form-inline">
                <select class="form-select col-sm-4" id="search_student_level_internship" required="" >
                  <option value="">No level required</option>
                  <option>Second year</option>
                  <option>Third year</option>
                  <option>Fourth year</option>
                  <option>Fifth year</option>
                </select>
                <input class="form-control col-sm-3" id="search_available" type="number" placeholder="available places" aria-label="available places">
              </div>


              <div class="form-inline">
                <select class="custom-select d-block col-sm" id="search_select_type" required="">
                  <option value="">Compagny</option>
                  <option>Internship</option>
                  <option>Admin</option>
                  <option>Pilot</option>
                  <option>Delegate</option>
                  <option>Student</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </form>

            
          </div>


        </nav>
  </div>
       

    <div class="container col-md-10 ">
  
        <hr class="mb-4">
      
  
        <main role="main">


          <div id="result_search">

            <div class="col-md-12">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                  <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17849d5ce12%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17849d5ce12%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                
                  <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Type</strong>
                    <h3 class="mb-0"> Title </h3>
                    <div class="mb-1 text-muted">
                      Date
                    </div>
                    <p class="card-text mb-auto">Description</p>
                  </div>
              </div>
            </div>
            <div class="col-md-12">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17849d5ce12%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17849d5ce12%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                
                    <div class="card-body d-flex flex-column align-items-start">

                        <strong class="d-inline-block mb-2 text-primary">Type</strong>
                        <h3 class="mb-0"> Title </h3>
                        <div class="mb-1 text-muted">Date</div>
                        <p class="card-text mb-auto">Description</p>
                        
                    </div>
                </div>
            </div>

            <hr class="mb-4">
          </div>



          






          <!-- Wishlist -->
          <div class="jumbotron">
            <div class="">
              <h1>Wishlist</h1>

              <hr class="mb-4">
              


              <div class="row">

                
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17849d5ce12%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17849d5ce12%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    
                        <div class="card-body d-flex flex-column align-items-start">

                            <strong class="d-inline-block mb-2 text-primary">Type</strong>
                            <h3 class="mb-0"> Title </h3>
                            <div class="mb-1 text-muted">Date</div>
                            <p class="card-text mb-auto">Description</p>
                            
                        </div>
                    </div>
                </div>


                    
                    
                        <div class="col-md-12">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17849d5ce12%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17849d5ce12%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            
                                <div class="card-body d-flex flex-column align-items-start">
        
                                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                                    <h3 class="mb-0"> Compagny name </h3>
                                    <div class="mb-1 text-muted">Date</div>
                                    <p class="card-text mb-auto">Description</p>
                                    
                                </div>
                            </div>
                        </div>



              </div>










            </div>
          </div>
        </main>


        <hr class="mb-4">
        <?php
          include_once 'footer.php'
        ?>

    </div>



    
    

    
</body>
</html>