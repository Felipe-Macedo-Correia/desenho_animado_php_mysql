<?php
    class Status{
        public $idStatus, $tipoStatus;


        public function getIdStatus(){
            return $this-> idStatus;

       }

       public function setidStatus($idStatus){
           $this -> idStatus = $idStatus;

       }

       public function getTipoSatus(){
        return $this-> tipoStatus;

       }
         public function setTipoStatus($tipoStatus){
            $this -> tipoStatus = $tipoStatus;
       }

    }


//ALTER TABLE "tbdesenhos" ADD CONSTRAINT "Status" FOREIGN KEY ("idStatus") REFERENCES "tbStatus" ("idStatus")
?>