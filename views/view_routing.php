<?php
$top_title = 'PHP Router - Create routes';
$top_active = 'router';
require_once(__DIR__.'/view_top.php');
?>


<div class="banner">
  <div>Powerful and Secure Router</div>
  <div>Supports query strings</div>
  <div>Search Engine Friendly URLs</div>
</div>

<main>

  <div class="card">
    <div class="title">
      The library - get | post | any
    </div>
    <div class="description">
      <p>
        <a href="phprouter_demo.zip" class="primary_color font_weight_700">Download PHP ROUTER</a>. It contains
        3 files. 
      </p> 
      <p>
        The first file (<span class="font_weight_400">.htaccess</span>)
        with 3 lines of code. 
      </p>
      <p>
        The second file (<span class="font_weight_400">router.php</span>) 
        with 60 lines of code. This file is the heart of the system.      
      </p>
      <p>
        The third file (<span class="font_weight_400">index.php</span>) where
        all the routes will be defined. It comes with examples for get, post, and any.
        Fell free to delete those routes and create your own.
      </p>
      <p>
        Yes, it is that simple!
      </p>
    </div>
    <!-- <a href="/htaccess">
      What is the .htaccess file ?
    </a> 
    <a href="">
      What is the router.php file ?
    </a>
    <a href="">
      What is the index.php file ?
    </a>                     -->
    <!-- <a href="/love/download">
      17.852 &#10084;
    </a> -->
  </div>


  <div class="card">
    <div class="title">
      get | post | any
    </div>
    <div class="description">
      <p>
        In any of these routes, remember to <span class="primary_color font_weight_700">exit();</span>
        in the function.
      </p>                       
    </div>
  </div> 


  <div class="card">
    <div class="title">
      get REQUEST
    </div>
    <div class="description">
      <p>
        Use the <span class="primary_color font_weight_700">get</span> function to create a route that supports the GET protocol.
        This function takes 2 arguments. The first argument is the route. The second
        argument is the name of the function that will be called on that route.
      </p>
      <div class="code">
        <div>get( '/', 'index' )</div>
        <div>function index(){ // Code here; exit(); }</div>
      </div> 
      <div class="code">
        <div>get( '/user', 'show_user' )</div>
        <div>function show_user(){ // Code here; exit(); }</div>
      </div> 
      <div class="code">
        <div>get( '/users/all', 'show_all_users' )</div>
        <div>function show_all_users(){ // Code here; exit(); }</div>
      </div>                        
    </div>
    <!-- <a href="/love/htaccess">
      1.590 &#10084;
    </a> -->
  </div>  


  <div class="card">
    <div class="title">
      get REQUEST with VARIABLES
    </div>
    <div class="description">
      <p>
        Use the <span class="primary_color font_weight_700">get</span> function to create a 
        route that supports the GET protocol.
        This function takes 2 arguments. The first argument is the route and it supports variables.
        The second argument is the name of the function that will be called on that route.
      </p>
      <p>
        Variables in the route are prepended with colon <span class="primary_color font_weight_700">:</span>.
        The name used for the variable must be the exact name of the argument in the function. Also,
        the declared variables in the route and the arguments in the function must follow the same order.
      </p>
      <div class="code">
        <div>get( '/user/<span class="primary_color font_weight_700">:id</span>', 'get_user_by_id' )</div>
        <div>function get_user_by_id(<span class="primary_color font_weight_700">$id</span>){ // Code here; exit(); }</div>
      </div> 
      <div class="code">
        <div>get( '/users/all/<span class="primary_color font_weight_700">:age</span>', 'show_all_users' )</div>
        <div>function show_all_users(<span class="primary_color font_weight_700">$age</span>){ // Code here; exit(); }</div>
      </div>                        
      <div class="code">
        <div>get( '/user/<span class="primary_color font_weight_700">:name</span>/<span class="primary_color font_weight_700">:last_name</span>', 'show_user' )</div>
        <div>function show_user(<span class="primary_color font_weight_700">$name</span>, <span class="primary_color font_weight_700">$last_name</span>){ // Code here; exit(); }</div>
      </div>
      <div class="code">
        <div>get( '/test/<span class="primary_color font_weight_700">:age</span>/one/<span class="primary_color font_weight_700">:color</span>', 'do_something' )</div>
        <div>function do_something(<span class="primary_color font_weight_700">$age</span>, <span class="primary_color font_weight_700">$color</span>){ // Code here; exit(); }</div>
      </div>               
    </div>
    <!-- <a href="/love/htaccess">
      37.831 &#10084;
    </a> -->
  </div>  


  <div class="card">
    <div class="title">
      post REQUEST
    </div>
    <div class="description">
      <p>
        Use the <span class="primary_color font_weight_700">post</span> function to create a route that supports the POST protocol.
        This function takes 2 arguments. The first argument is the route. The second
        argument is the name of the function that will be called on that route.
      </p>
      <div class="code">
        <div>post( '/items', 'create_item' )</div>
        <div>function create_item(){ // Code here; exit(); }</div>
      </div> 
      <div class="code">
        <div>post( '/users', 'create_user' )</div>
        <div>function create_user(){ // Code here; exit(); }</div>
      </div> 
      <div class="code">
        <div>post( '/save/user', 'save_user' )</div>
        <div>function save_user(){ // Code here; exit(); }</div>
      </div>                        
    </div>
    <!-- <a href="/love/htaccess">
      4.590 &#10084;
    </a> -->
  </div>  


  <div class="card">
    <div class="title">
      post REQUEST with VARIABLES
    </div>
    <div class="description">
      <p>
        Use the <span class="primary_color font_weight_700">post</span> function to create a 
        route that supports the POST protocol.
        This function takes 2 arguments. The first argument is the route and it supports variables.
        The second argument is the name of the function that will be called on that route.
      </p>
      <p>
        Variables in the route are prepended with colon <span class="primary_color font_weight_700">:</span>.
        The name used for the variable must be the exact name of the argument in the function. Also,
        the declared variables in the route and the arguments in the function must follow the same order.
      </p>
   
      <div class="code">
        <div>post( '/users/update/<span class="primary_color font_weight_700">:id</span>', 'update_user_by_id' )</div>
        <div>function update_user_by_id(<span class="primary_color font_weight_700">$id</span>){ // Code here; exit(); }</div>
      </div> 
      <div class="code">
        <div>post( '/users/all/<span class="primary_color font_weight_700">:age</span>', 'get_all_user_by_age' )</div>
        <div>function get_all_user_by_age(<span class="primary_color font_weight_700">$age</span>){ // Code here; exit(); }</div>
      </div>                        
      <div class="code">
        <div>post( '/users/update/<span class="primary_color font_weight_700">:name</span>/<span class="primary_color font_weight_700">:last_name</span>', 'update_user' )</div>
        <div>function update_user(<span class="primary_color font_weight_700">$name</span>, <span class="primary_color font_weight_700">$last_name</span>){ // Code here; exit(); }</div>
      </div>
      <div class="code">
        <div>post( '/test/<span class="primary_color font_weight_700">:age</span>/one/<span class="primary_color font_weight_700">:color</span>', 'do_something' )</div>
        <div>function do_something(<span class="primary_color font_weight_700">$age</span>, <span class="primary_color font_weight_700">$color</span>){ // Code here; exit(); }</div>
      </div>               
    </div>
    <!-- <a href="/love/htaccess">
      37.831 &#10084;
    </a> -->
  </div>  



  <div class="card">
    <div class="title">
      any REQUEST
    </div>
    <div class="description">
      <p>
        Use the <span class="primary_color font_weight_700">any</span> function to create a route that supports the GET or POST protocol.
        This function takes 2 arguments. The first argument is the route. The second
        argument is the name of the function that will be called on that route.
      </p>
      <div class="code">
        <div>any( '/items', 'create_item' )</div>
        <div>function create_item(){ // Code here; exit(); }</div>
      </div> 
      <div class="code">
        <div>any( '/users', 'create_user' )</div>
        <div>function create_user(){ // Code here; exit(); }</div>
      </div> 
      <div class="code">
        <div>any( '/save/user', 'save_user' )</div>
        <div>function save_user(){ // Code here; exit(); }</div>
      </div>                        
    </div>
    <!-- <a href="/love/htaccess">
      4.590 &#10084;
    </a> -->
  </div>  


  <div class="card">
    <div class="title">
      any REQUEST 404 - Page not found
    </div>
    <div class="description">
      <p>
        Use the <span class="primary_color font_weight_700">any('/404', 'error404');</span> function to create a route
        that displays a <span class="primary_color font_weight_700">page not found</span>
      </p>
      <div class="code">
        <div>any('/404', 'error404');</div>
        <div>function error404(){ // Code here; exit(); }</div>
      </div>                      
    </div>
    <!-- <a href="/love/htaccess">
      4.590 &#10084;
    </a> -->
  </div>  

</main>

<?php
require_once(__DIR__.'/view_bottom.php');
?>