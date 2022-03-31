<?php

    class User
    {
        private $id;
        private $name;
        private $email;
        private $password;
        
        public function validateLogin()
        {
            
            //conectar no banco de dados
            //selecionar o usuario que tenha o mesmo email do informado
            //conferiir senha
            //se tiver tudo ok...criar session e direcionar tela dashboard
            //se tiver algun erro...redirecionar de volta a tela inicial
        }
        public function setName($name)
        {
            $this -> name = $name;
        }            
        public function setEmail($email)
        {
            $this -> email = $email;
        }

        public function setPassword($password)
        {
            $this -> password = $password;
        }
    
        public function getName()
        {
            return $this->name;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getPassword()
        {
            return $this->password;
        }
    }