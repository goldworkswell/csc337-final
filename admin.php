<?php
require_once "adaptor.php";
session_start();
?>
<html>
<head>
    <link rel = "stylesheet" href = "style1.css" type = "text/css">
    <link rel = "stylesheet" href = "style.css" type = "text/css">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
<body>
    
    
    <a href = "index.php"><input type = "submit"></a>
    
    

      <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Dollar Shop</a>
    </div>
      <div class="navbar-header">
      
    </div>
      <ul class="nav navbar-nav navbar-right">
      <a href = "index.php"><input type = "submit" value = "Log Out" class = "btn btn-primary navbar- btn"></a>
      </ul>
      
      
 
      
      
      
  </div>
</nav>
 <h1>.</h1>   
    
    <?php 
    
    $db = new DatabaseAdaptor();
    $array = $db->admin_report();
    foreach ($array as $record){
        echo '<h3> '.$record['username'].'   purchased '.$record['quant'].'  '.$record['product_name'].'</h3>';
    }
    
    ?>
    
    
    
    </body>
</html>