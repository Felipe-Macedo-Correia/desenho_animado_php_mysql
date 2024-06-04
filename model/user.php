<?php
    class User{
        public $idUser, $nomeUser, $nascUser,$emailUser, $senhaUser;
        //id
        public function getidUser(){
             return $this-> idUser;

        }

        public function setidUser($idUser){
            $this -> idUser = $idUser;

        }
        //nome
        public function getNomeUser(){
         return $this-> nomeUser;

        }

        public function setNomeUser($nomeUser){
            $this -> nomeUser = $nomeUser;

        }
      
        //nascimento
        public function getNascUser(){
             return $this-> nascUser;

        }

        public function setNascUser($nascUser){
            $this -> nascUser = $nascUser;

        }
        //email
            public function getEmailUser(){
             return $this-> emailUser ;

        }

        public function setEmail($emailUser){
            $this -> emailUser = $emailUser;

        }    
        //senha
        public function getSenha(){
             return $this-> senhaUser;

        }

        public function setSenha($senhaUser){
            $this -> senhaUser = $senhaUser;
        }

    

    }


?>