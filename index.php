<?php
require_once "adaptor.php";

$db = new DatabaseAdaptor ();
if (isset($_POST['username_reg']) && $_POST['password_reg'] != ""){
$db->add($_POST['username_reg'], $_POST['password_reg']);
}
if (isset($_POST['username']) && $_POST['password'] != ""){
   if($db->login($_POST['username'], $_POST['password'])) {
    session_start();
    $_SESSION['user'] = $_POST['username'];
   }
}

?>
<?php

if(isset($_GET['mode'])){
    
    if ($_GET['mode'] === "register"){
     require_once "register.php";
     }
     elseif ($_GET['mode'] === "login"){
     require_once "login.php";
     }
    
    }
else {
    require_once "shop.php";
}
if (isset($_SESSION['user'])){
    header('Location: logged_in.php');
}
?>