<?php
$top_title = 'PHP Router - Create routes';
$top_active = 'csrf';
require_once(__DIR__.'/view_top.php');
?>


<div class="banner">
  <div>Cross Site Request Forgery</div>
  <div>CSRF</div>
</div>

<main>

  <div class="card">
    <div class="title">
      Cross Site Request Forgery - CSRF
    </div>
    <div class="description">
      <a href="/routing" class="primary_color font_weight_700">setup tutorial</a>
      <p>
        To secure a form agains CSRF add the folling to the form:
      </p>
      <p>
        &lt;input type="hidden" name="csrf" value="&lt;?php 
        <span class="primary_color font_weight_700">set_csrf()</span> ?&gt;" &gt;
      </p>      
      <p>
        To check if the form has not been CSRForget, use the function 
        <span class="primary_color font_weight_700">is_csrf_valid()</span> by adding it to the
        route that will receive the POSTed form:
      </p> 
      <div class="code">
        <p>
          post('/users', 'create_user');
        </p>
        <p>
          function create_user(){
        </p>
        <p class="margin_left_1">
          if( ! <span class="primary_color font_weight_700">is_csrf_valid()</span> ){ 
        </p>
        <p class="margin_left_1">
          // The form is forged
        </p>
        <p class="margin_left_1">
            // Code here
        </p>
        <p class="margin_left_1">
            exit(); 
        </p>
        <p class="margin_left_1">
          }        
        </p> 
        <p class="margin_left_1">
            // Code here sinde the form is legit
        </p>      
        <p class="margin_left_1">
            exit();
        </p>                                            
      }      
      </div>
    </div>
    <a href="/routing">
        more about routes ?
      </a>     
    <!-- <a href="/love/htaccess">
      1.590 &#10084;
    </a> -->
  </div>  


</main>

<?php
require_once(__DIR__.'/view_bottom.php');
?>