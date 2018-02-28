<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');

        $ApagarUsuario = new Delete();
        $ApagarUsuario->ExeDelete('users', "WHERE id = :id", 'id=13');

        if ($ApagarUsuario->getResultado() && $ApagarUsuario->getRowCount()):
            echo "<p style='color:green'>{$ApagarUsuario->getRowCount()} Usuario apagado com sucesso</p>";
        else:
            echo "<p style='color:red'>Usuario não foi apagado</p>";
        endif;
        ?>
    </body>
</html>
