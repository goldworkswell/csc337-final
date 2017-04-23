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
        "INSERT INTO users (id, username, pass, registered) VALUES (NULL, :username, :password, now())" );
        $stmt->bindParam('username', $username);
        $stmt->bindParam('password', $hashed_pwd);
        $stmt->execute();
        }
    public function login($username, $password){
        $stmt = $this->DB->prepare(
        "SELECT pass FROM users WHERE username = '$username'");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return password_verify($_POST['password'], $result[0]['pass']);
    }
    
}
?>