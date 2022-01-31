<?php
//include api file
require 'ms.php';

//add Categoryn to databse

// Get data
$data = json_decode(file_get_contents("php://input"));


$n = $data->name;
$s = $data->src;
$name = htmlspecialchars(strip_tags($n));
$src = htmlspecialchars(strip_tags($s));


print_r (newCategory($name, $src));

?>