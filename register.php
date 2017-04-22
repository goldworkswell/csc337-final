
<?php
require_once "adaptor.php";

?>

<html>
<head>
    <link rel = "stylesheet" href = "style.css" type = "text/css">
    <script type = "text/javascript" src = "script.js"></script>
    <script type = "text/javascript" src = "prototype.js"></script>    
    </head>
<body>
    
    <h1>Make an Account here!!!</h1>
    <form action = "index.php" method = "post">
    <label>Username: </label><input type = "text" name = "username" id = "name"> <br>
    <label>Password: </label><input type = "password" name = "password"> <br> <br>
    <input type = "submit" value = "Register">
    </form>
    </body>
</html>