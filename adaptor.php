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
        
        $stmt = $this->DB->prepare(
        "INSERT INTO cart (user_id, item_id, quant, username) VALUES ((SELECT id from users where username = '$username'), 0, 0, :username);");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        
        $stmt = $this->DB->prepare(
        "INSERT INTO cart (user_id, item_id, quant, username) VALUES ((SELECT id from users where username = '$username'), 1, 0, :username);");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        
        $stmt = $this->DB->prepare(
        "INSERT INTO cart (user_id, item_id, quant, username) VALUES ((SELECT id from users where username = '$username'), 2, 0, :username);");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        
        $stmt = $this->DB->prepare(
        "INSERT INTO cart (user_id, item_id, quant, username) VALUES ((SELECT id from users where username = '$username'), 3, 0, :username);");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        
        $stmt = $this->DB->prepare(
        "INSERT INTO cart (user_id, item_id, quant, username) VALUES ((SELECT id from users where username = '$username'), 4, 0, :username);");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        
        $stmt = $this->DB->prepare(
        "INSERT INTO cart (user_id, item_id, quant, username) VALUES ((SELECT id from users where username = '$username'), 5, 0, :username);");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        
        
        

        $stmt = $this->DB->prepare(
        "INSERT INTO admin (user_id, item_id, quant, username) VALUES ((SELECT id from users where username = '$username'), 0, 0, :username);");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        
        $stmt = $this->DB->prepare(
        "INSERT INTO admin (user_id, item_id, quant, username) VALUES ((SELECT id from users where username = '$username'), 1, 0, :username);");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        
        $stmt = $this->DB->prepare(
        "INSERT INTO admin (user_id, item_id, quant, username) VALUES ((SELECT id from users where username = '$username'), 2, 0, :username);");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        
        $stmt = $this->DB->prepare(
        "INSERT INTO admin (user_id, item_id, quant, username) VALUES ((SELECT id from users where username = '$username'), 3, 0, :username);");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        
        $stmt = $this->DB->prepare(
        "INSERT INTO admin (user_id, item_id, quant, username) VALUES ((SELECT id from users where username = '$username'), 4, 0, :username);");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        
        $stmt = $this->DB->prepare(
        "INSERT INTO admin (user_id, item_id, quant, username) VALUES ((SELECT id from users where username = '$username'), 5, 0, :username);");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        }
    public function login($username, $password){
        $stmt = $this->DB->prepare(
        "SELECT pass FROM users WHERE username = '$username';");
        $stmt->bindParam('username', $username);
        $stmt->execute();
        $result = $stmt->fetchAll();
        if ($result != NULL){    
            if($username === "Admin" || $username === "admin"){
                if($password == 1234){
                    return true;
                }
            }
            else{
            return password_verify($_POST['password'], $result[0]['pass']);
            }
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
    public function add_item($id, $item_id){
        if (isset($_GET['item'])){
            $stmt = $this->DB->prepare("UPDATE cart SET quant = quant + 1 WHERE item_id = :item_id AND username = :id;");
            $stmt->bindParam('item_id', $item_id);
            $stmt->bindParam('id',$id);
            $stmt->execute();
        }
    }
    public function clear_cart($user){
        $stmt = $this->DB->prepare("UPDATE cart SET quant = 0 WHERE username = :user;");
        $stmt->bindParam('user', $user);
        $stmt->execute();
    }
    public function get_cart_as_array($user) {
        $stmt=$this->DB->prepare("SELECT * FROM cart WHERE username = :user;");
        $stmt->bindParam('user', $user);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function up_admin($user){
        $stmt=$this->DB->prepare("SELECT * FROM cart WHERE username = :user;");
        $stmt->bindParam('user', $user);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($array as $record){
            if ($record['quant'] != 0){
            $stmt=$this->DB->prepare("UPDATE admin set quant = quant + :quantity WHERE username = :user AND item_id = :item_id;");
             $stmt->bindParam('quantity', $record['quant']);
             $stmt->bindParam('user', $user);
             $stmt->bindParam('item_id', $record['item_id']);
            $stmt->execute();
            }
            
        }
    }
    public function admin_report(){
        $stmt=$this->DB->prepare("select * from admin join products on admin.item_id = products.product_id where quant != 0;");
        $stmt->execute();
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
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