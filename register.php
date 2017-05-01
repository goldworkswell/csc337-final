
<?php
require_once "adaptor.php";

?>

<html>
<head>
    <link rel = "stylesheet" href = "style.css" type = "text/css">
    <link rel = "stylesheet" href = "style1.css" type = "text/css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type = "text/javascript" src = "script.js"></script>
    <script type = "text/javascript" src = "prototype.js"></script>    
    </head>
<body>
    
    
    <div id = "signup">
        <h1>Please select a username and password</h1>
    <form action = "index.php" method = "post">
    <label>Username </label><br><input type = "text" name = "username_reg" id = "name"> <br/><span id='errors'></span> <br/>
    <label>Password </label> <br><input type = "password" name = "password_reg"> <br> <br>
    <input type = "submit" value = "Register" class = "btn btn-info" id = "reg">
    </form>
    </div>
    
    </body>
</html>
