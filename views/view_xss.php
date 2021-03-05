<?php
$top_title = 'PHP Router - Create routes';
$top_active = 'xss';
require_once(__DIR__.'/view_top.php');
?>


<div class="banner">
  <div>Cross Site Scripting</div>
  <div>XSS</div>
</div>

<main>

  <div class="card">
    <div class="title">
      Cross Site Scripting - XSS
    </div>
    <div class="description">
      <a href="/routing" class="primary_color font_weight_700">setup tutorial</a>
      <p>
        To output data to the client use the function 
        <span class="primary_color font_weight_700">out()</span>
      </p>
      <p>
        This function takes 1 argument which is the data you want to output.
        It is just like using <span class="primary_color font_weight_700">echo</span>
        but it prevents XSS.
      </p>      
      <p>
        Should I only use <span class="primary_color font_weight_700">out()</span>
        in stead of <span class="primary_color font_weight_700">echo</span> ?
        No, use <span class="primary_color font_weight_700">echo</span> if the data
        is something you fully trust, for anything else, use out()
      </p>
      <div class="code">
        <div>$text = '&lt;script&gt;alert()&lt;/script&gt;'</div>
        <div>echo $text; // Creates an XSS</div>
        <div>out($text); // No XSS. &amp;lt;script&amp;gt;alert()&amp;lt;/script&amp;gt;
        </div>
      </div>
    </div>
    <a href="/csrf">
      protect against CSRF ?
    </a> 
    <!-- <a href="/love/htaccess">
      1.590 &#10084;
    </a> -->
  </div>  


</main>

<?php
require_once(__DIR__.'/view_bottom.php');
?>