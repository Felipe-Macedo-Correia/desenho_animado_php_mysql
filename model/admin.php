<?php
    class Admin{
        public $idAdmin, $nomeAdmin, $sobrenomeAdmin, $cpfAdmin, $nascAdmin, $emailAdmin, $senhaAdmin, $imagemAdmin, $tokenAdmin;


        public function getidAdmin(){
            return $this-> idAdmin;

       }

       public function setidAdmin($idAdmin){
             $this -> idAdmin = $idAdmin;
       }

       public function getNomeAdmin(){
        return $this-> nomeAdmin;

   }

   public function setNomeAdmin($nomeAdmin){
       $this -> nomeAdmin = $nomeAdmin;

   }



    public function getSobreNomeAdmin(){
        return $this-> sobrenomeAdmin;

    }

    public function setSobrenomeAdmin($sobrenomeAdmin){
      $this -> sobrenomeAdmin = $sobrenomeAdmin;

    }

    public function getCpfAdmin(){
        return $this-> cpfAdmin;

   }

   public function setCpfAdmin($cpfAdmin){
       $this -> cpfAdmin = $cpfAdmin;

   }

     public function getNascAdmin(){
        return $this-> nascAdmin;

     }

     public function setNascAdmin($nascAdmin){
        $this -> nascAdmin = $nascAdmin;

        }




       public function getEmailAdmin(){
           return $this-> emailAdmin;
      }

    public function setEmailAdmin($emailAdmin){
         $this -> emailAdmin = $emailAdmin;

    }    



    public function getSenha(){
        return $this-> senhaAdmin;

   }

   public function setSenhaAdmin($senhaAdmin){
       $this -> senhaAdmin = $senhaAdmin;

   }


    public function getImagemAdmin(){
        return $this-> imagemAdmin;

    }

    public function setImagemAdmin($imagemAdmin){
        return $this-> imagemAdmin = $imagemAdmin;

    }

    public function salvarImagem($novo_nome) {
        //a foto vem com a extenção $_FILES
        if(empty($_FILES['foto']['size']) != 1){
            //pegar as extensão do arquivo
            if ($novo_nome ==""){
                //Ciando um nome novo
                $novo_nome = md5(time()). ".jpg";
            }
            //definindo o diretorio
            $diretorio = "../../img/admin/";
            //juntando o nome com o diretorio
            $nomeCompleto = $diretorio.$novo_nome;
            //efetuando o upload
            move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto );
            return $novo_nome;
         }else{
          return $novo_nome;
         }
      }


      

    public function setidUser($imagemAdmin){
        $this -> imagemAdmin = $imagemAdmin;

    }

    public function getTokenAdmin(){
        return $this-> tokenAdmin;

   }

   public function setTokenAdmin($tokenAdmin){
       $this -> tokenAdmin = $tokenAdmin;

   }

   public  function generateToken(){
    return bin2hex(random_bytes(16));
   }

   


    }






?>