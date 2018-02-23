<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            /*require("./class/Apartamento.class.php");
            require("./class/Visitante.class.php");
            require("./class/Funcionario.class.php");*/
            require("./inc/Config.inc.php");
            
            $apartamento = new Apartamento(15);
            $funcionario = new Funcionario("Fulano");
            $visitante = new Visitante("Beltrano");
            
            echo "<pre>";
            var_dump($apartamento, $funcionario, $visitante);
            echo "</pre>";
        ?>
    </body>
</html>
