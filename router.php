<?php

function get($route, $path_to_include){
  if( $_SERVER['REQUEST_METHOD'] == 'GET' ){ route($route, $path_to_include); }  
}
function post($route, $path_to_include){
  if( $_SERVER['REQUEST_METHOD'] == 'POST' ){ route($route, $path_to_include); }    
}
function delete($route, $path_to_include){
  if( $_SERVER['REQUEST_METHOD'] == 'DELETE' ){ route($route, $path_to_include); }    
}
function any($route, $path_to_include){ route($route, $path_to_include); }
function route($route, $path_to_include){
  if($route == "/404"){
    http_response_code(404);
    include_once("{$_SERVER['DOCUMENT_ROOT']}/$path_to_include");
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
    include_once("{$_SERVER['DOCUMENT_ROOT']}/$path_to_include");
    exit();
  }
  if( count($route_parts) != count($request_url_parts) ){ return; }  
  $parameters = [];
  for( $i = 0; $i < count($route_parts); $i++ ){
    $route_part = $route_parts[$i];
    if( preg_match("/^[$]/", $route_part) ){
      $route_part = ltrim($route_part, '$');
      array_push($parameters, $request_url_parts[$i]);
      $$route_part=$request_url_parts[$i];
    }
    else if( $route_parts[$i] != $request_url_parts[$i] ){
      return;
    } 
  }
  include_once("{$_SERVER['DOCUMENT_ROOT']}/$path_to_include");
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
