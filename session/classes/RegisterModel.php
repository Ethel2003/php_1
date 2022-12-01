<?php 
     require "../classes/connexion.php";
    class RegisterModel extends Connexion {
        private $firstname;
        private $lastname;
        private $username;
        private $email;
        private $password;
        
        public function __construct($fname, $lname, $username, $mail, $pwd){
            $this->firstname = $fname;
            $this->lastname = $lname;
            $this->username = $username;
            $this->email = $mail;
            $this->password = $pwd;
        }

        public function registerUser() {
                // Connection à la BDD
            $conn = $this->connect();
            $sql = "INSERT INTO `base_test`.utilisateurs VALUES (NULL,:userfirstname, :userlastname,  :username,  :useremail, :userpassword)";
            $stmt = $conn->prepare($sql);
            $stmt = $stmt->execute([
                ":userfirstname" => $this->firstname,
                ":userlastname" => $this->lastname,
                ":username" => $this->username,
                ":useremail" => $this->email,
                ":userpassword" => password_hash($this->password, PASSWORD_DEFAULT)
            ]);
        }
    }
?>