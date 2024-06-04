<?php
    class avaliacao{
        public $idAvaliacao, $avaliacao, $idUser, $idDesenhos;

        public function getIdAvaliacao(){
            return $this-> idAvaliacao;
        }

        public function setIdAvaliacao($idAvaliacao){
            $this -> idAvaliacao = $idAvaliacao;
        }

        public function getAvaliacao(){
            return $this-> avaliacao;
        }

        public function setAvaliacao($avaliacao){
            $this -> avaliacao = $avaliacao;
        }
        
         //CHAVE ESTRANGEIRA DA TABELA USER
        public function getIdUser(){
            return $this-> idUser;
        }

        public function setIdUser($idUser){
            $this -> idUser = $idUser;
        }

        //CHAVE ESTRANGEIRA DA TABELA DESENHO
        public function getIdDesenhos(){
            return $this-> idDesenhos;
        }

        public function seIdDesenhos($idDesenhos){
            $this -> idDesenhos = $idDesenhos;
        }




    }






?>