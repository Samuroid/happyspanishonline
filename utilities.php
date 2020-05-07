<?php
// Generator a page title for each page by using the result of $_SERVER['PHP_SELF'] and determining whether it contains the needle word ('index' or 'classes' or 'profile' or 'methodology')
function getTitle(){
  $siteUri = $_SERVER['PHP_SELF'];
  $siteTitle = "";
  if( strpos($siteUri, 'index') !== false ){ // Index page
    $siteTitle = "Learn Spanish At Home, Learn Spanish Online, with Macarena.";
  } else if ( strpos($siteUri, 'classes') !== false ){ // Classes page
    $siteTitle = "Create a learning program that suits your needs. Learn Spanish At Home, Learn Spanish Online, with Macarena.";
  }
  else{
    $siteTitle = "Learn Spanish At Home with Macarena. Learn Spanish Online.";
  }
  echo $siteTitle;
}


function getCSS(){
  $siteUri = $_SERVER['PHP_SELF'];
  if( strpos($siteUri, 'contact') !== false ){ // Index page
    echo '<link rel="stylesheet" href="css/contact-form.css">';
  }
}

?>
