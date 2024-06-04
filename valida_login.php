<?php 
    session_start();
    
    

    $usuarios_app = array(
        array('id' => 1, 'email' => 'lipex@gmail.com', 'senha' =>'4321'),
        array('id'=> 2, 'email' => 'tutu@gmail.com','senha' => '1234' )
    );

    $usuario_autenticado = false;

    foreach($usuarios_app as $user){

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo "Usuario autenticado";
        header('Location: home.html');
        $_SESSION['autenticado'] = 'Sim, está autenticado';
    }else{
        echo"erro na autenticação do usuário";
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'Não';
    }

?>