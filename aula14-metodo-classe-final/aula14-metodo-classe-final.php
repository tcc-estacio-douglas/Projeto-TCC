<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require('./inc/Config.inc.php');
            
            /*$cheque = new Cheque(100.10, "Comum");
            $cheque->getValor();*/
            
            $chequeComum = new ChequeComum(980.20, "comum");
            $chequeComum->calcularJuros();
            
            $chequeEspecial = new ChequeEspecial(230.10, "especial");
            $chequeEspecial->calcularJuros();
        ?>
    </body>
</html>
