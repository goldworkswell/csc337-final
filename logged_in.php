<?php
session_start();
?>

<html>
<head>
    <link rel = "stylesheet" href = "style.css" type = "text/css">
    
    </head>
<body>
    
    <div id = "logged"><p>Logged in as  <?=$_SESSION['user'] ?></p>
    <a href = "index.php"><input type = "submit" value = "Log me out"></a>
    </div>
    
    </body>
</html>