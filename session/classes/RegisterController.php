<?php
    class RegisterController{
        private $lname;
        private $fname;
        private $username;
        private $mail;
        private $password;
        private $passwordConfirm;

        public function __construct($lname, $fname, $usrname, $mail, $pwd, $pwdConfirm){
            $this->lname = $lname;
            $this->fname = $fname;
            $this->username = $usrname;
            $this->mail = $mail;
            $this->password = $pwd;
            $this->passwordConfirm = $pwdConfirm;
        }

        public function emptyInputs(){
            if(empty($this->lname) || empty($this->fname) || empty($this->username) || empty($this->mail) || empty($this->password) || empty($this->passwordConfirm)){
                header("Location: ../register.php?msg=emptyInput&firstname=$this->fname&lastname=$this->lname&username=$this->username&mail=$this->mail");
            }else{
                return false;
            }
        }

        public function validateFirstname(){
            //vérifie si le nom d'utilisateur commence par une lettre alphabétique ensuite des nombres|@|_|-
            if (!preg_match("/^\w[A-Za-z]+$/i", $this->fname)){
                header("Location:../register.php?msg=)invalidFirstname");
            }
            return false;
        }

        public function validateLastname(){
            //vérifie si le nom d'utilisateur commence par une lettre alphabétique ensuite des nombres|@|_|-
            if (!preg_match("/^\w[A-Za-z]+$/i", $this->lname)){
                header("Location:../register.php?msg=)invalidLastname");
            }
            return false;
        }

        public function validateUsername(){
            //vérifie si le nom d'utilisateur commence par une lettre alphabétique ensuite des nombres|@|_|-
            if (!preg_match("/^\w[A-Za-z0-9_\-@]+$/i", $this->username)){
                header("Location:../register.php?msg=)invalidUsername");
            }
            return false;
        }

        public function validateEmail(){
            if(!filter_var($this->mail, FILTER_VALIDATE_EMAIL)){
                header("Location:../register.php?msg=)invalidEmail");
            }
            return false;
        }

        public function pwdMatch(){
            if($this->password !== $this->passwordConfirm){
                header("Location:../register.php?msg=)passwordNotMatch");
            }
            return false;
        }

        public function validateInputs(){
            $this->emptyInputs();
            $this->validateUsername();
            $this->validateEmail();
            $this->pwdMatch();
            $this->validateFirstname();
            $this->validateLastname();
        }
    }
?>