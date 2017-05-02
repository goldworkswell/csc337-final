<?php
session_start();
require_once "adaptor.php";
?>
<html>
<head>
    <link rel = "stylesheet" href = "style1.css" type = "text/css">
    <link rel = "stylesheet" href = "style.css" type = "text/css">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
<body>
    
    

    
    

      <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Dollar Shop</a>
    </div>
      <div class="navbar-header">
      <p class="navbar-brand">Username: <?=$_SESSION['user']?></p>
    </div>
      <ul class="nav navbar-nav navbar-right">
      <a href = "logged_in.php"><input type = "submit" value = "Continue Shopping" class = "btn navbar- btn"></a>
        <a href = "index.php"><input type = "submit" value = "Log Out" class = "btn btn-primary navbar- btn"></a>
      </ul>
      
      
 
      
      
      
  </div>
</nav>
   
  
    <h1>.</h1>
<div id = "bob">
    <form method = "get" action = "cart.php">
    <input type = "hidden" value = "clear" name = "status">
    <input type = "submit" value = "Empty Cart" class = "btn btn-info">
    
    </form>
    
    <form method = "get" action = "index.php">
    <input type = "hidden" value = "checkout" name = "mode">
    <input type = "submit" Value = "Proceed to checkout" class = "btn btn-success">
    
    </form>
    </div>
      
      <?php ?>

    </body>
</html>
<?php
    $dab = new DatabaseAdaptor();
    $arr = $dab->get_cart_as_array($_SESSION['user']);
    
    foreach($arr as $record){
        if($record['item_id'] == 0){
            echo '<h3>Tub O towels * '.$record['quant']. '</h3>';
        }
        elseif($record['item_id'] == 1){
            echo '<h3>KeySmart Key Holder * '.$record['quant']. '</h3>';
        }
        elseif($record['item_id'] == 2){
            echo '<h3>Projecto-Clock * '.$record['quant']. '</h3>';
        }
        elseif($record['item_id'] == 3){
            echo '<h3>Shower Speaker * '.$record['quant']. '</h3>';
        }
        elseif($record['item_id'] == 4){
            echo '<h3>Anti-Anxiety Food * '.$record['quant']. '</h3>';
        }
        elseif($record['item_id'] == 5){
            echo '<h3>Laptop * '.$record['quant']. '</h3>';
        }
    }      
          
          
          
if (isset($_GET['status'])){
    if($_GET['status'] === "clear"){
        $db = new DatabaseAdaptor ();
        $db->clear_cart($_SESSION['user']);
        
    }
    
}


?>