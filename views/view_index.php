<?php
$top_title = 'PHP Router, XSS, and CSRF';
$top_active = 'index';
require_once(__DIR__.'/view_top.php');
?>

<div class="banner">
  <div>Powerful and Secure Router</div>
  <div>Cross Site Scripting</div>
  <div>Cross Site Request Forgery</div>
</div>

<main>

  <div class="card">
    <div class="title">
      Powerful Router
    </div>
    <div class="description">
      <p>
        The most powerful and secure routing library for PHP. Easily
        create routes for get, post, or any of the two.
      </p>
    </div>
    <a href="/routing">
      setup and routing tutorial ...
    </a>
  </div>

  <div class="card">
    <div class="title">
      Cross Site Scripting (XSS)
    </div>
    <div class="description">
      <p>
        Protect your website from Cross Site Scripting (XSS)
        with 1 function.
      </p>
    </div>
    <a href="/xss">
      XSS tutorial ...
    </a>    
  </div>

  <div class="card">
    <div class="title">
      Cross Site Request Forgery (CSRF)
    </div>
    <div class="description">
      <p>
        Protect your website from Cross Site Request Forgery (CSRF)
        by simply calling a function to secure the website and another
        function to check if the request originated from the client
        you expected.
      </p>
    </div>
    <a href="/csrf">
      CSRF tutorial ...
    </a>      
  </div>

</main>

<?php
require_once(__DIR__.'/view_bottom.php');
?>



