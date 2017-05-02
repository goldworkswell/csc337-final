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
      <a href = "cart.php"><input type = "submit" value = "Cart" class = "btn navbar- btn"></a>
        <a href = "index.php"><input type = "submit" value = "Log Out" class = "btn btn-primary navbar- btn"></a>
      </ul>
      
      
 
      
      
      
  </div>
</nav>
   
    <div class = "container-fluid" id = "outside">
        <div class = "container-fluid" id = "small">
        <h1>.</h1>
        </div>
        
        <div class = "container-fluid" id = "emphasis">
        <h2></h2>
        </div>
        <div class = "container-fluid" id = "pic1">
        <div class = "row">
            <div class = "col-lg-4" id = "left1"><img src = "img_1.jpg">  <p id="p0">Tub O' Towels</p>
                 <form method = "get" action = "logged_in.php">
                     <input type = "hidden" value = "0" name = "item"><input type = "submit" value = "Add to Cart" id = "b1" class = "btn btn-info"><p>$1</p></form></div>
        
            
            <div class = "col-lg-4" id = "mid1"><img src = "img_2.jpg"> <p id="p1">KeySmart Key Holder</p>
                 <form method = "get" action = "logged_in.php">
                     <input type = "hidden" value = "1" name = "item"><input type = "submit" value = "Add to Cart" id = "b2" class = "btn btn-info"><p>$1</p></form></div>
            
        <div class = "col-lg-4" id = "right1"><img src = "img_3.jpeg"><p id="p2">Projecto-Clock</p>
             <form method = "get" action = "logged_in.php">
                 <input type = "hidden" value = "2" name = "item"><input type = "submit" value = "Add to Cart" id = "b3" class = "btn btn-info"><p>$1</p></form></div>
        </div>
        </div>
        <div class = "container-fluid" id = "editing">
        <h2></h2>
        </div>
        
        <div class = "container-fluid" id = "pic2">
        <div class = "row">
        <div class = "col-lg-4" id = "left2"><img src = "img_4.jpg"><p id="p3">Shower Speaker</p><form method = "get" action = "logged_in.php">
                 <input type = "hidden" value = "3" name = "item"><input type = "submit" value = "Add to Cart" id = "b4" class = "btn btn-info"><p>$1</p></form></div>
        <div class = "col-lg-4" id = "mid2"><img src = "img_5.jpg"><p id="p4">Anti-Anxiety Food</p><form method = "get" action = "logged_in.php">
                 <input type = "hidden" value = "4" name = "item"><input type = "submit" value = "Add to Cart" id = "b5" class = "btn btn-info"><p>$1</p></form></div>
        <div class = "col-lg-4" id = "right2"><img src = "img_6.jpg"><p id="p4">Laptop?</p><form method = "get" action = "logged_in.php">
                 <input type = "hidden" value = "5" name = "item"><input type = "submit" value = "Add to Cart" id = "b6" class = "btn btn-info"><p>$1</p></form></div>
            </div>
        </div>
        </div>

    
      
      

    </body>
</html>
<?php
    
    $data = new DatabaseAdaptor();
          if (isset($_GET['item'])){
    $data->add_item($_SESSION['user'], $_GET['item']);
          }
    
    ?>