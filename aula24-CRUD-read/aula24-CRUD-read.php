<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');

        $LerUsuario = new Read();
        $LerUsuario->ExeRead('users', 'WHERE name = :name AND email = :email LIMIT :limit', "name=Beltrano&email=fbeltran@bit.com&limit=2");
        var_dump($LerUsuario);
                
        ?>
    </body>
</html>
