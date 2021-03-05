<?php

require_once(__DIR__.'/router.php');

get('/', 'serve_index');
function serve_index(){
  require_once(__DIR__.'/views/view_index.php');
  exit();
}


get('/routing', 'serve_routing');
function serve_routing(){
  require_once(__DIR__.'/views/view_routing.php');
  exit();
}

get('/csrf', 'csrf');
function csrf(){
  require_once(__DIR__.'/views/view_csrf.php');
  exit();
}

get('/xss', 'xss');
function xss(){
  require_once(__DIR__.'/views/view_xss.php');
  exit();
}


get('/htaccess', 'htaccess');
function htaccess(){
  require_once(__DIR__.'/views/view_htaccess.php');
  exit();
}

get('/user', 'get_user' );
function get_user(){
  echo 'user';
}

post('/users', 'create_user');
function create_user(){
  if( ! get_csrf() ){ 
    // The form is not trustable
    // Code here
    exit(); 
  }
}


any('/404', 'error404');
function error404(){
  require_once(__DIR__.'/views/view_404.php');
  exit();
}

