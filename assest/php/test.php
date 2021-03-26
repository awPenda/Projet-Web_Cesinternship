<?php
    include './DB_class.php';
    include './locality.class.php'
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
<form name='test' action='' method='post'>
<input type="text" name="id_locality" id="id_locality" placeholder='id_locality'>
<input type="text" name="zip_code" id="zip_code" value='' placeholder='zip code'>
<input type="text" name="city_name" id="city_name" value='' placeholder='city name'>
<input type="submit" name="show_locality" id="show_locality" value="Show">
<input type="submit" name="send_locality" id="send_locality" value="Add">
<input type="submit" name="update_locality" id="update_locality" value="Update">
<input type="submit" name="delete_locality" id="delete_locality" value="Delete">
</form>

<?php
    if(isset($_POST["show_locality"])){
        $locality = new locality();
        $locality->get_locality();
    }
    //creation d'une locality
    if(isset($_POST["send_locality"])){
        $zip_code = $_POST["zip_code"];
        $city_name = $_POST["city_name"];
        $locality = new locality();
        $locality->add_locality($zip_code,$city_name);
    }
    //maj d'une locality
    if(isset($_POST["update_locality"])){
        $id_locality = $_POST["id_locality"];
        $zip_code = $_POST["zip_code"];
        $city_name = $_POST["city_name"];
        $locality = new locality();
        $locality->modify_locality($id_locality,$zip_code,$city_name);
    }
    if(isset($_POST["delete_locality"])){
        $id_locality = (int)$_POST["id_locality"];
        $locality = new locality();
        $locality->delete_locality($id_locality);
    }
?>
</body>
</html>