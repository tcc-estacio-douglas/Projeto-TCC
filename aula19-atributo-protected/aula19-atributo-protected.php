<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require ('./inc/Config.inc.php');
            
            $funcionario = new FuncionarioProtected("Fitto", 750, 300);
            $funcionario->verFuncionario();
                        
            echo "<hr>";
            
            $funcionariobonus = new Bonus("Physis", 900, 1750);
            $funcionariobonus->verFuncionario();
            
        ?>
    </body>
</html>
