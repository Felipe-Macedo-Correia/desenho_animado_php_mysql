<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetin PW2-  Desenhos</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<header>
    <nav class="navBar" id="navBar">
        <Span class="logo"><i class="fa-solid fa-gamepad"></i></i></Span>
        <ul class="navLinks">

         

        </ul>
         
        
       

    </nav>

</header>    
   

<main>
    <div class="container">
        <div class="form-image">
            <img src="https://static.metafy.gg/illustrations/blocks.svg" alt="">
        </div>

        <img src="https://static.metafy.gg/illustrations/blocks.svg" alt="" class="imgBloquinho">


        <div class="form">
            <form  method="post" action="valida_login.php">
                <div class="form-header">
                    <div class="title">
                        <h1>Conecte-se</h1>
                    </div>

                    <div class="socialBtn">
                        <button class="discord"><i class="fa-brands fa-discord"></i></button>
                        <button class="instagram"><i class="fa-brands fa-instagram"></i></i></button>
                        <button class="twitch"><i class="fa-brands fa-twitch"></i></button>
                        <button class="google"><i class="fa-brands fa-google"></i></button>
                    </div>
                    
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <input type="text" name="email" placeholder="E-mail..." required>
                    </div>

                    <div class="input-box">
                        <input type="password" name="senha" placeholder="Senha..." required>
                    </div>

                </div>



                <?php
                    if(isset($_GET['login']) && $_GET ['login'] == 'erro'){
                ?>
                    <div class='loginerror' style="color: red; font-size: 10.5pt; "> Email ou senha inválida...</div>
                <?php
                    }
                ?>
                <?php
                    if(isset($_GET['login']) && $_GET['login'] == 'erroautenticacao'){
                ?>
                    <div class='loginerror' style="color: red;"> erro de autenticação</div>
                <?php
                    }
                ?>

                <div class="extras-login">
                    <label><input type="checkbox">Relembre-me</label>
                    <a href="#">Esqueceu a senha?</a>
                </div>

                <div class="continue-button">
                    <button class="btnLogin">Entrar </button>
                </div>



            </form>
    
    </main>
</body>
</html>