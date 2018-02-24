<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require('./inc/Config.inc.php');
            $carrinho = new Carrinho("Curso 1", 100, "Cartão");
            $carrinho->Pagamento();
            
            $pagamentoDinheiro = new PagamentoDinheiro("Curso 2", 100, "Dinheiro", 12);
            $pagamentoDinheiro->Pagamento();
            
            $pagamentoParcelado = new PagamentoParcelado("Curso 3", 100, "Cartão Parcelado", 5);
            $pagamentoParcelado->Pagamento(10);
        ?>
    </body>
</html>
