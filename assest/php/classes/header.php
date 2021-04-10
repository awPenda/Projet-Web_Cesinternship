<?php //classe contenant le header?>
<header>
    <nav class="navbar navbar-dark bg-dark"> 
        <h1 id="Title_cesinternship"><img src="../pictures/CesinternshipLOGO.png" alt="Cesinternship" width="250"></h1>
        <div class="">
        <form action="" method="post">
            <!-- retirer et le faire propre dans le js ou un truc comme ça, attention un bouton dans un a ça se fait pas-->
            <button class="navbar-toggler collapsed" id='btn_home' name='btn_home'><i class="fas fa-home"></i></button>

            <button class="navbar-toggler collapsed" id='create_button' name='create_button'><i class="fas fa-plus"></i></button>

            <button class="navbar-toggler collapsed" id='modify_button' name='modify_button'><i class="fas fa-edit"></i></button>

            <button class="navbar-toggler collapsed" id="button_sign_out" name="button_sign_out"><i class="fas fa-sign-out-alt"></i></button>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </form>
        </div>
                    
        <?php

            

            if(isset($_POST['btn_home'])){
                header("location: https://www.cesinternship.local/assest/pages/home.php");
            }
            if(isset($_POST['create_button'])){
                header("location: https://www.cesinternship.local/assest/pages/create.php");
            }
            if(isset($_POST['modify_button'])){
                header("location: https://www.cesinternship.local/assest/pages/update_delete.php");
            }
            if(isset($_POST['button_sign_out'])){
            //détruit les sessions en cours pour la déconnection total
            session_destroy();
            header("location:https://www.cesinternship.local/index.php");
            }
        ?>

            
            
        <div class="navbar-collapse collapse" id="navbarsExample01" >
                      
            <p class="text-center" style="color: white;">
                Find your intership with Cesinternship !
            </p>
        </div>
    </nav>
</header>