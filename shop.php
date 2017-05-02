<?php
require_once "adaptor.php";
?>
<html>
<head>
<title>Shop</title>

<link rel = "stylesheet" href = "style1.css" type = "text/css">
    <link rel = "stylesheet" href = "style.css" type = "text/css">
    <script type = "text/javascript" src = "script.js"></script>
    <script type = "text/javascript" src = "prototype.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Dollar Shop</a>
    </div>
   <ul class="nav navbar-nav navbar-right">
    <form action = "index.php" method = "get">
    <input type = "hidden" value = "login" name = "mode"><input type = "submit" value = "Login" class = "btn btn-primary navbar-btn">
    </form>
    </ul>
      
      <ul class = "nav navbar-nav navbar-right">
      <form action = "index.php" method = "get">
    <input type = "hidden" value ="register" name = "mode"><input type = "submit" value = "Register" class = "btn navbar-btn" id = "test">
    </form>
      </ul>
      
      
 
      
      
      
  </div>
</nav>
    
        <div class = "container-fluid" id = "outside">
        <div class = "container-fluid" id = "small"><h1>Small Text</h1>
        
        
        <div class = "container-fluid" id = "pic1">
        <div class = "row">
            <div class = "col-lg-4" id = "left1"><img src = "img_1.jpg"> <br><button id = "b1" class = "btn btn-info">Add to cart</button> <p>$1</p></div>
        <div class = "col-lg-4" id = "mid1"><img src = "img_2.jpg"> <br><button id = "b2" class = "btn btn-info">Add to cart</button><p>$1</p></div>
        <div class = "col-lg-4" id = "right1"><img src = "img_3.jpeg"><br><button id = "b3" class = "btn btn-info">Add to cart</button><p>$1</p></div>
        </div>
        </div>
        
        <div class = "container-fluid" id = "editing">
        <h2></h2>
        </div>
        
        <div class = "container-fluid" id = "pic2">
        <div class = "row">
        <div class = "col-lg-4" id = "left2"><img src = "img_4.jpg"><br><button id = "b4" class = "btn btn-info">Add to cart</button><p>$1</p></div>
        <div class = "col-lg-4" id = "mid2"><img src = "img_5.jpg"><br><button id = "b5" class = "btn btn-info">Add to cart</button><p>$1</p></div>
        <div class = "col-lg-4" id = "right2"><img src = "img_6.jpg"><br><button id = "b6" class = "btn btn-info">Add to cart</button><p>$1</p></div>
        </div>
        </div>
    </div>
    </div>
            <br>
    <p id = "output"></p>
   
</body>
  

</html>