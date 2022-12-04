<?php 
     require "../classes/connexion.php";
    class LoginModel extends Connexion {
        private $username;
        private $password;
        
        public function __construct($username, $pwd){
            $this->username = $username;
            $this->password = $pwd;
        }

        public function loginUser() {
                // Connection à la BDD
           try { 
            $conn = $this->connect();
            $sql = "SELECT username, user_mail, user_pwd FROM utilisateurs WHERE (username ='$this->username'OR user_mail ='$this->username') AND user_pwd ='password_hash($this->password,PASSWORD_DEFAULT)';";
            //$stmt = $conn->prepare($sql);
            $conn->exec($sql);
        } catch(PDOException $e){
            echo "error";
        }
        }
    }
?>