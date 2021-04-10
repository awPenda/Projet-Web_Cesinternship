<!-- Wishlist -->
<div class="jumbotron">
            <div class="">
            <!--<a href="https://thispersondoesnotexist.com#face">img</a>-->
              <h1>Wishlist</h1>

              <hr class="mb-4">
              <form class="" method="POST">
                <div class="navbar navbar-expand-lg navbar-light bg-light rounded justify-content-center">
                    <input class="form-control col-sm-3 text-muted" type="text" value="add internship to wishlist : " readonly>
                    <input class="form-control col-sm-3" id="add_internship_wishlist" name="add_internship_wishlist" type="number" placeholder="id internship" aria-label="id internship">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="add_btn" name="add_btn"><i class="fas fa-plus"></i></button>
                </div>
              </form>
              <hr class="mb-4">

              <?php
                        if(isset($_POST["add_btn"])){
                            $id_internship = $_POST['add_internship_wishlist'];
                            echo var_dump($id_internship);
                            $id_wishlist = 11;
                            echo var_dump($id_wishlist);
                            $internship = new internship();
                            $internship->add_internship_to_wishlist($id_wishlist,$id_internship);
                        }
                    ?> 

              <div class="row">

                <?php
                    //afficher les offres de stages dans la wishlist
                    $show = new internship();
                      $show->show_internship_wishlist();

                ?>   

            <hr class="mb-4">
              <form class="" method="POST">
                <div class="navbar navbar-expand-lg navbar-light bg-light rounded justify-content-center">
                    <input class="form-control col-sm-3 text-muted" type="text" value="delete internship from wishlist : " readonly>
                    <input class="form-control col-sm-3" id="delete_internship_wishlist" name="delete_internship_wishlist" type="number" placeholder="id internship" aria-label="id internship">
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" id="delete_btn" name="delete_btn"><i class="fas fa-minus"></i></button>
                </div>
              </form>   



              <?php
                        if(isset($_POST["delete_btn"])){
                            $type = $_POST['delete_internship_wishlist'];
                            $internship = new internship();
                            $internship->delete_internship_from_wishlist(11,$type);
                        }
                    ?>



              </div>
            </div>
          </div>