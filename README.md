# PHP ROUTER

Secure router with XSS and CSRF

1. Download the file ".htaccess" and place it under the root directory of your application. Usually this is a folder called "htdocs" or "www".

2. Download the file "router.php" and place it under the root directory of your application. Usually this is a folder called "htdocs" or "www".

3. Download the file "index.php" and place it under the root directory of your application. Usually this is a folder called "htdocs" or "www".

In the browser go to "localhost" or "127.0.0.1" and you should see the word "Index" displayed in the website.

Feel free to delete all the routes in the "index.php" file and create your own. Most likely you want to keep the last route for "Page not found".

any('/404', 'error404');
function error404(){
  echo 'Not found';
  exit();
}
