<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        require ('./inc/Config.inc.php');
        
        $UpdateUsuario = new Update();
        $Dados = ['name' => 'Aline', 'email' => 'aline.mattos@hotmail.com'];
        $UpdateUsuario->ExeUpdate('users', $Dados, "WHERE id = :id", 'id=2');
        
        var_dump($UpdateUsuario);
        
                
        ?>
    </body>
</html>
