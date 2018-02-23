<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require('./inc/Config.inc.php');
            $cliente = new Cliente('Av. Conselheiro Aguiar', 'Boa Viagem');
            echo $cliente->verEndereco();
            
            $clientePessoaFisica = new ClientePessoaFisica('Av. Domingos Ferreira', 'Pina', 12345789127, 'Fulano');
            echo $clientePessoaFisica->verEnderecoPessoaFisica();
            
            $clientePessoaJuridica = new ClientePessoaJuridica('Av. Mascarenhas', 'Imbiribeira', '00.000.000/0000-00', 'Beltrano Auto');
            echo $clientePessoaJuridica->verEnderecoPessoaJuridica();
            
        ?>
    </body>
</html>
