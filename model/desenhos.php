<?php 
    class Desenhos{
        public $idDesenho, $nomeDesenho, $descDesenho, $imgDesenho, $classficacaoDesenho, $tipoDesenho, $categoriaDesenho, $idStatus, $qtdsEpisodiosDesenhos, $qtdsTemporadasDesenhos;

            public function getidDesenho(){
                return $this-> idDesenho;

            }

            public function setidDesenho($idDesenho){
                $this -> idDesenho = $idDesenho;

            }

                public function getNomeDesenho(){
                    return $this-> nomeDesenho;

            }

            public function setNomeDesenho($nomeDesenho){
                $this -> nomeDesenho = $nomeDesenho;

            }


            public function getDescDesenho(){
                return $this-> descDesenho;

            }

            public function setDescDesenho($descDesenho){
                $this -> descDesenho = $descDesenho;

            }


                public function getImgDesenho(){
                    return $this-> imgDesenho;
    
            }
    
            public function setImgDesenho($imgDesenho){
                $this -> imgDesenho= $imgDesenho;
    
            }

                public function getClassficacaoDesenho(){
                    return $this-> classficacaoDesenho;

            }

                public function setClassficacaoDesenho($classficacaoDesenho){
                    $this -> classficacaoDesenho = $classficacaoDesenho;

            }

                public function getTipoDesenho(){
                    return $this-> tipoDesenho;

            }

                public function setTipoDesenho($tipoDesenho){
                    $this -> tipoDesenho = $tipoDesenho;

            }

                public function getCategoriaDesenho(){
                    return $this-> categoriaDesenho;

            }

                public function setCategoriaDesenho($categoriaDesenho){
                    $this -> categoriaDesenho = $categoriaDesenho;

            }

            

            public function setidStatus($idStatus){
                $this -> idStatus = $idStatus;

           }

            public function getIdStatus(){
                return $this-> idStatus;

           }

           public function getQtdsEpisodiosDesenhoso(){
            return $this-> qtdsEpisodiosDesenhos;

        }

                public function setQtdsEpisodiosDesenhos($qtdsEpisodiosDesenhos){
                    $this -> qtdsEpisodiosDesenhos = $qtdsEpisodiosDesenhos;

            }

            public function getQtdsTemporadasDesenhos(){
                return $this-> qtdsTemporadasDesenhos;

            }

                public function setQtdsTemporadasDesenhos($qtdsTemporadasDesenhos){
                    $this -> qtdsTemporadasDesenhos = $qtdsTemporadasDesenhos;

            }

            




    }




?>