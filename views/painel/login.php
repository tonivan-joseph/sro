<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - Painel Administrador</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/painel.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    </head>
    <body id="body-login">
        <section class="content-login">
            <div class="content-login-header">
                <h1>Entrar com Login Administrador</h1> 
                <div>
                    <img src="<?php echo BASE_URL; ?>/assets/images/logo-sro.png" alt="logo-da-imagen">
                </div>
            </div>

            <article class="content-login-form">
                <form method="POST">
                    Login:<input class="c_form" type="email" name="email" placeholder="E-mail.."/><br/>
                    Senha:<input class="c_form" type="password" name="senha" placeholder="Senha.."/><br/> 
                    <input type="submit" class="botao" value="Login"/>
                    <div class="erro-email">
                        <?php 
                        if(!empty($erro)) {
                            echo $erro;
                        }
                        ?>
                    </div>
                </form>
            </article>

        </section>
    </body>
</html>