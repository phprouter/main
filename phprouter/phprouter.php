<?php
/*
In .htaccess the following lines
RewriteEngine On
# Direct access to files with the following extensions
RewriteCond %{REQUEST_URI}  !(\.png|\.jpg|\.gif|\.jpeg|\.css|\.js)$
# Any request goes to index.php
RewriteRule (.*) index.php [QSA,L]
*/



function get($route, $function_to_call){
  if( $request_method = $_SERVER['REQUEST_METHOD'] == "GET" ){
    route($route, $function_to_call);
  }  
}
function post($route, $function_to_call){
  if( $request_method = $_SERVER['REQUEST_METHOD'] == "POST" ){
    route($route, $function_to_call);
  }    
}
function any($route, $function_to_call){
  route($route, $function_to_call);   
}
function route($route, $function_to_call){
  $request_url = $_SERVER['REQUEST_URI'];
  $request_url = rtrim($request_url, '/');
  $request_url = strtok($request_url, '?');
  $route_parts = explode("/", $route);
  $request_url_parts = explode("/", $request_url);
  if($route == "/404"){
    http_response_code(404);
    call_user_func_array($function_to_call, []);
    exit();
  }
  if( count($request_url_parts) == 1){ array_shift($route_parts); }
  if( count($route_parts) != count($request_url_parts) ){ return; }
  if( count($request_url_parts) == 1 && ( $route_parts[0] == $request_url_parts[0]) ){
    call_user_func_array($function_to_call, []);
    exit();
  }
  $parameters = [];
  for( $i = 1; $i < count($route_parts); $i++ ){
    $route_part = $route_parts[$i];
    if( preg_match("/^[:]/", $route_part) ){
      $route_part = ltrim($route_part, ':');
      array_push($parameters, $request_url_parts[$i]);
    }
    else if( $route_parts[$i] != $request_url_parts[$i] ){
      return;
    } 
  } // end for
  call_user_func_array($function_to_call, $parameters);
  exit();
}
function out($text){echo htmlspecialchars($text);}
function set_csrf(){
  if(session_status() == 1){ session_start(); }
  $csrf_token = bin2hex(random_bytes(25));
  $_SESSION['csrf'] = $csrf_token;
  echo '<input type="hidden" name="csrf" value="'.$csrf_token.'">';
}
function get_csrf(){
  if(session_status() == 1){ session_start(); }
  if( ! isset($_SESSION['csrf']) || ! isset($_POST['csrf'])){ return false; }
  if( $_SESSION['csrf'] != $_POST['csrf']){ return false; }
  return true;
}