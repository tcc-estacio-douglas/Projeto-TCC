<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require ('./inc/Config.inc.php');
            
            $funcionario = new FuncionarioPrivate("Beltrano", 1050);
            $funcionario->Nome = "Ciclano";
            //$funcionario->SalarioPrivate = 1200;
            
            echo $funcionario->verFuncionario();
        ?>
    </body>
</html>
