<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');

        $CadUsuario = new Create();
        $Dados = ['name' => 'Beltrano', 'email' => 'fbeltran@bit.com'];
        
        $CadUsuario->ExeCreate('users', $Dados);
        
        
        var_dump($CadUsuario);
        
        
        ?>
    </body>
</html>
