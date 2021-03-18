<?php

function get($route, $function_to_call){
  if( $_SERVER['REQUEST_METHOD'] == 'GET' ){ route($route, $function_to_call); }  
}
function post($route, $function_to_call){
  if( $_SERVER['REQUEST_METHOD'] == 'POST' ){ route($route, $function_to_call); }    
}
function delete($route, $function_to_call){
  if( $_SERVER['REQUEST_METHOD'] == 'DELETE' ){ route($route, $function_to_call); }    
}
function any($route, $function_to_call){ route($route, $function_to_call); }
function route($route, $function_to_call){
  if($route == "/404"){
    http_response_code(404);
    call_user_func_array($function_to_call, []);
    exit();
  }  
  $request_url = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
  $request_url = rtrim($request_url, '/');
  $request_url = strtok($request_url, '?');
  $route_parts = explode('/', $route);
  $request_url_parts = explode('/', $request_url);
  array_shift($route_parts);
  array_shift($request_url_parts);
  if( $route_parts[0] == '' && count($request_url_parts) == 0 ){
    call_user_func_array($function_to_call, []);
    exit();
  }
  if( count($route_parts) != count($request_url_parts) ){ return; }  
  $parameters = [];
  for( $i = 0; $i < count($route_parts); $i++ ){
    $route_part = $route_parts[$i];
    if( preg_match("/^[:]/", $route_part) ){
      $route_part = ltrim($route_part, ':');
      array_push($parameters, $request_url_parts[$i]);
    }
    else if( $route_parts[$i] != $request_url_parts[$i] ){
      return;
    } 
  }
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
function is_csrf_valid(){
  if(session_status() == 1){ session_start(); }
  if( ! isset($_SESSION['csrf']) || ! isset($_POST['csrf'])){ return false; }
  if( $_SESSION['csrf'] != $_POST['csrf']){ return false; }
  return true;
}
