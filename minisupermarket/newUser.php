<?php
//include api file
require 'ms.php';

//add Categoryn to databse

// Get data
$data = json_decode(file_get_contents("php://input"));



$email = htmlspecialchars(strip_tags($data->email));
$fname = htmlspecialchars(strip_tags($data->first_name));
$lname = htmlspecialchars(strip_tags($data->last_name));
$username = htmlspecialchars(strip_tags($data->username));
$b_fname = htmlspecialchars(strip_tags($data->billing->first_name));
$b_lname = htmlspecialchars(strip_tags($data->billing->last_name));
$b_company = htmlspecialchars(strip_tags($data->billing->company));
$b_address_1 = htmlspecialchars(strip_tags($data->billing->address_1));
$b_address_2 = htmlspecialchars(strip_tags($data->billing->address_2));
$b_city = htmlspecialchars(strip_tags($data->billing->city));
$b_state = htmlspecialchars(strip_tags($data->billing->state)); 
$b_postcode = htmlspecialchars(strip_tags($data->billing->postcode));
$b_country = htmlspecialchars(strip_tags($data->billing->country));
$b_email = htmlspecialchars(strip_tags($data->billing->email));
$b_phone = htmlspecialchars(strip_tags($data->billing->phone));
$s_fname = htmlspecialchars(strip_tags($data->shipping->first_name));
$s_lname = htmlspecialchars(strip_tags($data->shipping->last_name));
$s_company = htmlspecialchars(strip_tags($data->shipping->company));
$s_address_1 = htmlspecialchars(strip_tags($data->shipping->address_1));
$s_address_2 =  htmlspecialchars(strip_tags($data->shipping->address_2));
$s_city = htmlspecialchars(strip_tags($data->shipping->city)); 
$s_state = htmlspecialchars(strip_tags($data->shipping->state));
$s_postcode = htmlspecialchars(strip_tags($data->shipping->postcode)); 
$s_country = htmlspecialchars(strip_tags($data->shipping->country));



print_r (newUser($email, $fname, $lname, $username, 
$b_fname, $b_lname, $b_company, $b_address_1, 
$b_address_2, $b_city, $b_state, $b_postcode,
$b_country, $b_email, $b_phone,$s_fname, 
$s_lname, $s_company, $s_address_1, $s_address_2, 
$s_city, $s_state, $s_postcode, $s_country));

?>