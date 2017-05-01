<?php
class DatabaseAdaptor {
    private $DB;
    
    public function __construct() {
        $db = 'mysql:dbname=shopping;host=127.0.0.1';
        $user = 'root';
        $password = '';
        
        try {
            $this->DB = new PDO ($db, $user, $password);
            $this->DB->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch ( PDOEXCEPTION $e ) {
            echo ('error');
            exit();
        }
        }
    public function add ($username, $password) {
        $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
        
        $stmt = $this->DB->prepare(
        "INSERT INTO users (id, username, pass, registered) VALUES (NULL, :username, :password, now());" );
        $stmt->bindParam('username', $username);
        $stmt->bindParam('password', $hashed_pwd);
        $stmt->execute();
        }
    public function login($username, $password){
        $stmt = $this->DB->prepare(
        "SELECT pass FROM users WHERE username = '$username';");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        $result = $stmt->fetchAll();
        if ($result != NULL){    
            return password_verify($_POST['password'], $result[0]['pass']);
        }
    }
    public function findusernameexist($name) {
        $statement=$this->DB->prepare("SELECT username FROM users WHERE username=:name;");
        $statement->bindParam('name',$name);
        $statement->execute();
        $row=$statement->fetch(PDO::FETCH_ASSOC);
        if($row==NULL)
        {
             $row['status']='failed';
      
        }
        else
        {
            $row['status']='success';
        }
        
        return json_encode($row);
    }  
}

# Query on the given username (if any).
if (isset($_POST['name'])) {
	# Specify that the output will be JSON.
	header('Content-Type: application/json');
	$base = new DatabaseAdaptor();
	echo $base->findusernameexist($_POST['name']);
}
else {
	header($_SERVER['SERVER_PROTOCOL'] . ' 400 Invalid Request');
}

?>