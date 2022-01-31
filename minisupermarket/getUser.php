<?php
//include api file
require 'ms.php';

//get spcific User

//Get ID from somewhere
if (isset($_GET['id'])){
   $id = htmlspecialchars(strip_tags($_GET['id']));
}else{
    // Get data
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;

        $id = htmlspecialchars(strip_tags($id));
}








print_r (getUser($id));

?>