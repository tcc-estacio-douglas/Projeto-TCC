<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require('./class/Usuario.class.php');
            $usuario = new Usuario();
            echo $usuario->setClass("Fulano", "fulano@bit.com");
            
            echo $usuario->getClass();
        ?>
    </body>
</html>
