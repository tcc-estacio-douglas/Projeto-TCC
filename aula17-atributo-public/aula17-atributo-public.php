<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require ('./inc/Config.inc.php');
            
            $funcionario = new Funcionario("Fulano", 750);
            echo $funcionario->verFuncionario();
        ?>
    </body>
</html>
