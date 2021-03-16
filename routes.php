<?php

require_once(__DIR__.'/router.php');

// ##############################
get('/', function(){
  require_once(__DIR__.'/views/view_index.php');
  exit();
});

// ##############################
get('/routing', function(){
  require_once(__DIR__.'/views/view_routing.php');
  exit();
});

// ##############################
get('/csrf', function(){
  require_once(__DIR__.'/views/view_csrf.php');
  exit();
});

// ##############################
get('/xss', function(){
  require_once(__DIR__.'/views/view_xss.php');
  exit();
});

// ##############################
post('/check_page_view/:page_name', function($page_name){
  echo $page_name;
  $random = $page_name.'_'.bin2hex(random_bytes(16));
  file_put_contents(__DIR__."/page_views/$random", "");
  exit();
});

// ##############################
any('/404', function(){
  require_once(__DIR__.'/views/view_404.php');
  exit();
});

