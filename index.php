<?php

require_once(__DIR__.'/router.php');

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'index');
function index(){
  echo 'Index';
  exit();
}

// Dynamic GET. Example with 1 variable
// In the URL -> http://localhost/user/111
// The output -> The id passed is: 111
get('/user/:id', 'get_user_by_id');
function get_user_by_id($id){
  echo "The id passed is: $id ";
  exit();
}

// Dynamic GET. Example with 2 variables
// In the URL -> http://localhost/user/A/B
// The output -> The full name is A B
get('/user/:name/:last_name', 'get_full_name');
function get_full_name($name, $last_name){
  echo "The full name is: $name $last_name ";
  exit();
}

// Dynamic GET. Example with 2 variables with static
// In the URL -> http://localhost/product/shoes/color/blue
// The output -> The product is shoes with color blue
get('/product/:type/color/:color', 'get_product');
function get_product($type, $color){
  echo "The product is $type with color $color ";
  exit();
}

// Dynamic GET. Example with 1 variable and 1 query string
// In the URL -> http://localhost/item/car?price=10
// The output -> The item name is car ane the price is 10
get('/item/:name', 'get_item');
function get_item($name){
  echo "The item name is $name ane the price is {$_GET['price']}";
  exit();
}

// Dynamic GET. Example with 2 variables and 2 query strings
// In the URL -> http://localhost/item/Table/20?weight=10&height=30
// The output -> Name: Table Price: 20 Weight: 10 Height: 30
get('/item/:name/:price', 'get_all_about_item');
function get_all_about_item($name, $price){
  echo "Name: $name Price: $price Weight: {$_GET['weight']} Height: {$_GET['height']}";
  exit();
}

// ##################################################
// ##################################################
// ##################################################
// For post the exact same rules as get applied.
// Look at the examples above.

// Static POST
// In the form  -> <input type="text" name="user_name" value="John">
// The output   -> User created with name: John
post('/users', 'create_user');
function create_user(){
  echo "User created with name: {$_POST['user_name']}";
  exit();
}

// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
any('/404', 'error404');
function error404(){
  echo 'Not found';
  exit();
}
