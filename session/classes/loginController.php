<?php 
     class LoginController{
        private $username;
        private $password;
        
        public function __construct( $usrname, $pwd ){
            $this->username = $usrname;
            $this->password = $pwd;
            
        }

        public function emptyInputs(){
            if(($this->username) || empty($this->password) ){
                header("Location: ../login.php?msg=emptyInput");
            }else{
                return false;
            }
        }

        public function identification(){
            if(!filter_var($this->username, FILTER_VALIDATE_EMAIL)){
                if (!preg_match("/^\w[A-Za-z0-9_\-@]+$/i", $this->username)){
                    header("Location:../login.php?msg=)invalidUsername");
                }
                return false;
            }else{
                return false;
            }
        }
     }
   
?>