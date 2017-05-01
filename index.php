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
    if ($_SESSION['user'] === "Admin"){
    header('Location: admin.php');
}
    else {
    header('Location: logged_in.php');
    }
}


?>
<?php
function findusernameexist($name) {
    $task="select username, id FROM users where username=:nam";
    $statement=$this->db->prepare($task);
    $statement=bindParam('nam',$name);
    $statment->execute();
    $row=$statement->fetch(PDO::FETCH_ASSOC);
    $row['status']='success';
    return json_encode($row);
}


# Query on the given username (if any).
if (isset($_POST['username'])) {
	# Specify that the output will be JSON.
	header('Content-Type: application/json');
	$base = new DatabaseAdaptor();
	echo $base->findUsernameMatch($_POST['username']);
}
else {
	header($_SERVER['SERVER_PROTOCOL'] . ' 400 Invalid Request');
}


?>