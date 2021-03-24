<?php
    include './DB_class.php';
    include './get_locality.php';
    include './view_locality.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name='test' action='' method='post'>
<input type="text" name="id_locality" id="id_locality" placeholder='id_locality'>
<input type="text" name="zip_code" id="zip_code" value='' placeholder='zip code'>
<input type="text" name="city_name" id="city_name" value='' placeholder='city name'>
<input type="submit" name="show_locality" id="show_locality" value="Show">
<input type="submit" name="send_locality" id="send_locality" value="Add">
<input type="submit" name="update_locality" id="update_locality" value="Update">
</form>

<?php
    if(isset($_POST["show_locality"])){
        $locality = new view_locality();
        $locality->show_locality();
    }
    if(isset($_POST["send_locality"])){
        $zip_code = $_POST["zip_code"];
        $city_name = $_POST["city_name"];
        $add_locality = new locality();
        //echo $zip_code.'<br>',$city_name.'<br>';
        $add_locality->add_locality($zip_code, $city_name);
    }
    if(isset($_POST["update_locality"])){
        $id_locality = $_POST["id_locality"];
        $zip_code = $_POST["zip_code"];
        $city_name = $_POST["city_name"];
        $update_locality = new locality();
        //echo $id_locality.'<br>',$zip_code.'<br>',$city_name;
        $update_locality->update_locality($id_locality,$zip_code,$city_name);
    }
?>
</body>
</html>