<?php
 
 require '../vendor/autoload.php';
 session_start();
 //session_destroy();
/*

  setcookie('meno', 'Maros');
  setcookie('meno', null, -1,)
  var_dump($_COOKIE);
  
 
 session_start();
 $_SESSION['test'] = 'nieco';
 var_dump($_SESSION);

  die;
  */
  /* 
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
  
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
?>

<html>
   
   <head>
      <title>Setting up a PHP session</title>
   </head>
   
   <body>
      <?php  echo ( $msg ); 
      ?>
   </body>
   
</html>

*/


 

  require '../config/db.php';
  require '../helpers/content.php';
  require '../classes/Router.php';

  // routes
  Router::route('GET', '/', function($url){
    include '../pages/home.php';
  });

  Router::route('GET', '/registration', function($url){
    include '../pages/registration.php';
  });

  Router::route('POST', '/registration', function($url){
    include '../pages/registration.php';
  });

   Router::route('GET', '/cart', function($url){
    include '../pages/cart.php';
  });

    Router::route('POST', '/cart', function($url){
    include '../pages/cart.php';
  });


  Router::route('GET', '/error', function($url){
    include '../pages/error.php';
  });

  // routes
  Router::route('GET', '/books(\?.*)?', function($url){
    include '../pages/books.php';
  });

  // routes
  Router::route('POST', '/books(\?.*)?', function($url){
    include '../pages/books.php';
  });

   Router::route('GET', '/book/([\w-]+)/(\d+)', function($url, $slug, $idKnihy){
    include '../pages/book.php';
  });

  Router::execute();

