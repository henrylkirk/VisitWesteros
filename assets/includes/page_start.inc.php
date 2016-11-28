<?php
  // initialize everything that I need for the site
  
  // constants
  define( "PATH", "/home/hxk1231/Sites/240/final/" );
  define( "PATH_INC", PATH . "assets/includes/" );  
  
  define( "URL", "http://kelvin.ist.rit.edu/~hxk1231/240/final/" );
  define( "URL_CSS", URL . "assets/css/" );
  define( "URL_JS", URL . "assets/js/" );
  define( "URL_IMG", URL . "assets/media/" );
  
  // include function libraries or other classes
  include "/home/hxk1231/db_conn.php";
  
  // initialize the database connection
  $mysqli = mysqli_connect( $db_host, $db_user, $db_pass, $db_name ); // $db_user==$db_name
  
  // verify that we have a valid connection
  if ( !$mysqli ) {
    echo "connection error:" . mysqli_connect_error();
    die(); // prevents further execution
  }
?>