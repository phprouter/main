<?php
$top_title = 'PHP Router - Create routes';
$top_active = '';
require_once(__DIR__.'/view_top.php');
?>


<div class="banner">
  <div>.htaccess</div>
</div>

<main>

  <div class="card">
    <div class="title">
      The .htaccess file
    </div>
    <div class="description">
      <p>
        RewriteEngine On
      </p>
      <p>
        RewriteCond %{REQUEST_URI}  !(\.png|\.jpg|\.gif|\.jpeg|\.zip|\.css|\.js)$
      </p>
      <p>
        RewriteRule (.*) index.php [QSA,L]      
      </p>
      <p>
        The first line tells the Apache server that the file will be used.
      </p>
      <p>
        The second line tells the Apache server to bypass the routing system when
        an image, css, zip, or js file is requested.
      </p>      
      <p>
        The third line tells the Apache server to direct all traffic to the 
        <span class="font_weight_400">index.php</span> page, 
        which is the file where all the routes are setup.
      </p> 
      <a href="/router">
        more about routes ?
      </a> 
    </div>
    <a href="/love/htaccess">
      1.590 &#10084;
    </a>
  </div>  


</main>

<?php
require_once(__DIR__.'/view_bottom.php');
?>