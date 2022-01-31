<?php

// Setup for Woocommerce API:
	require __DIR__ . '/vendor/autoload.php';

	use Automattic\WooCommerce\Client;

	
//function for products
function allProducts()
{
	$woocommerce = new Client(
		'http://wordpress/', // Your store URL
		'ck_fb07e2f1832d2b4f0e28b1c63f8be45ffb959dbe', // Your consumer key
		'cs_f6c57a1e1292d2deb8c7d8759c014f422b71496e', // Your consumer secret
		[
			'wp_api' => true, // Enable the WP REST API integration
			'version' => 'wc/v3', // WooCommerce WP REST API version
			'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
		]
	);

    //get all woocommerce products
    $products = $woocommerce->get('products');

    return $products;
}

/*****functions for categories*****/

function allCategories()
{
	$woocommerce = new Client(
		'http://wordpress/', // Your store URL
		'ck_fb07e2f1832d2b4f0e28b1c63f8be45ffb959dbe', // Your consumer key
		'cs_f6c57a1e1292d2deb8c7d8759c014f422b71496e', // Your consumer secret
		[
			'wp_api' => true, // Enable the WP REST API integration
			'version' => 'wc/v3', // WooCommerce WP REST API version
			'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
		]
	);

    //get all woocommerce categories
    $categories = $woocommerce->get('products/categories');

    return $categories;
}




function getCategory($id)
{
	$woocommerce = new Client(
		'http://wordpress/', // Your store URL
		'ck_fb07e2f1832d2b4f0e28b1c63f8be45ffb959dbe', // Your consumer key
		'cs_f6c57a1e1292d2deb8c7d8759c014f422b71496e', // Your consumer secret
		[
			'wp_api' => true, // Enable the WP REST API integration
			'version' => 'wc/v3', // WooCommerce WP REST API version
			'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
		]
	);

    //get specific woocommerce category
    $onecategory = $woocommerce->get('products/categories/'.$id );

    return $onecategory;
}



function deleteCategory($id)
{
	$woocommerce = new Client(
		'http://wordpress/', // Your store URL
		'ck_fb07e2f1832d2b4f0e28b1c63f8be45ffb959dbe', // Your consumer key
		'cs_f6c57a1e1292d2deb8c7d8759c014f422b71496e', // Your consumer secret
		[
			'wp_api' => true, // Enable the WP REST API integration
			'version' => 'wc/v3', // WooCommerce WP REST API version
			'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
		]
	);

    //delete specific woocommerce category
    $woocommerce->delete('products/categories/'.$id, ['force' => true]);

    return json_encode(array("Message:" => "Category is deleted"));;
}




function newCategory($name, $src)
{
	$woocommerce = new Client(
		'http://wordpress/', // Your store URL
		'ck_fb07e2f1832d2b4f0e28b1c63f8be45ffb959dbe', // Your consumer key
		'cs_f6c57a1e1292d2deb8c7d8759c014f422b71496e', // Your consumer secret
		[
			'wp_api' => true, // Enable the WP REST API integration
			'version' => 'wc/v3', // WooCommerce WP REST API version
			'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
		]
	);

	$data = [
		'name' => $name,
		'image' => [
			'src' => $src
			]

		];

    //add a cateory to the woocommerce database
    $woocommerce->post('products/categories/', $data);

    return json_encode(array("Message:" => "Category is added"));;
}



/*****functions for Users(Customers)*****/


function getUser($id)
{
	$woocommerce = new Client(
		'http://wordpress/', // Your store URL
		'ck_fb07e2f1832d2b4f0e28b1c63f8be45ffb959dbe', // Your consumer key
		'cs_f6c57a1e1292d2deb8c7d8759c014f422b71496e', // Your consumer secret
		[
			'wp_api' => true, // Enable the WP REST API integration
			'version' => 'wc/v3', // WooCommerce WP REST API version
			'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
		]
	);

    //get specific woocommerce category
    $getuser = $woocommerce->get('customers/'.$id );

    return $getuser;
}



function deleteCustomers($id)
{
	$woocommerce = new Client(
		'http://wordpress/', // Your store URL
		'ck_fb07e2f1832d2b4f0e28b1c63f8be45ffb959dbe', // Your consumer key
		'cs_f6c57a1e1292d2deb8c7d8759c014f422b71496e', // Your consumer secret
		[
			'wp_api' => true, // Enable the WP REST API integration
			'version' => 'wc/v3', // WooCommerce WP REST API version
			'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
		]
	);

    //delete specific woocommerce category
    $woocommerce->delete('customers/'.$id, ['force' => true]);

    return json_encode(array("Message:" => "User deleted"));;
}




function newUser($email, $fname, $lname, $username, 
$b_fname, $b_lname, $b_company, $b_address_1, 
$b_address_2, $b_city, $b_state, $b_postcode,
$b_country, $b_email, $b_phone,$s_fname, 
$s_lname, $s_company, $s_address_1, $s_address_2, 
$s_city, $s_state, $s_postcode, $s_country)
{
	$woocommerce = new Client(
		'http://wordpress/', // Your store URL
		'ck_fb07e2f1832d2b4f0e28b1c63f8be45ffb959dbe', // Your consumer key
		'cs_f6c57a1e1292d2deb8c7d8759c014f422b71496e', // Your consumer secret
		[
			'wp_api' => true, // Enable the WP REST API integration
			'version' => 'wc/v3', // WooCommerce WP REST API version
			'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
		]
	);

	$data = [
		'email' => $email,
		'first_name' => $fname,
		'last_name' => $lname,
		'username' => $username,

		'billing' => [
			'first_name' => $b_fname,
			'last_name' => $b_lname,
			'company' => $b_company,
			'address_1' => $b_address_1,
			'address_2' => $b_address_2,
			'city' => $b_city,
			'state' => $b_state,
			'postcode' => $b_postcode,
			'country' => $b_country,
			'email' => $b_email,
			'phone' => $b_phone
		],

		'shipping' => [
			'first_name' => $s_fname,
			'last_name' => $s_lname,
			'company' => $s_company,
			'address_1' => $s_address_1,
			'address_2' => $s_address_2,
			'city' => $s_city,
			'state' => $s_state,
			'postcode' => $s_postcode,
			'country' => $s_country
			]

		];

    //add a cateory to the woocommerce database
    $woocommerce->post('customers', $data);

    return json_encode(array("Message:" => "User is added"));;
}


?>