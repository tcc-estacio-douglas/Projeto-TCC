<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require './config/Config.php';
            
            $ListarUsuario = new ControleUsuario();
            $ListarUsuario->index();
            
            $CadUsuario = new ControleUsuario();
            $CadUsuario->cadastrar();
        ?>
    </body>
</html>
