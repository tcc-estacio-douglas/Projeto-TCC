<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');

        $Acao = filter_input(INPUT_GET, 'acao', FILTER_DEFAULT);
        $IdUsuario = filter_input(INPUT_GET, 'IdUsuario', FILTER_VALIDATE_INT);

        if (!empty($Acao) && $Acao == "apagar"):
            echo "<hr>$Acao<hr>";
            if (!empty($IdUsuario)):
                $ApagarUsuario = new Delete();
                $ApagarUsuario->ExeDelete('users', "WHERE id = :id", "id={$IdUsuario}");

                if ($ApagarUsuario->getResultado() && $ApagarUsuario->getRowCount()):
                    echo "<p style='color:green'>{$ApagarUsuario->getRowCount()} Usuario apagado com sucesso</p>";
                else:
                    echo "<p style='color:red'>Usuario não foi apagado</p>";
                endif;

            endif;
        endif;


        $LerUsuario = new Read();
        $LerUsuario->ExeRead('users', 'WHERE name = :name LIMIT :limit', "name=fulano&limit=6");

        foreach ($LerUsuario->getResultado() as $users):
            extract($users);
            echo $id . "<br>";
            echo $name . "<br>";
            echo $email . "<br>";
            ?>
            <a href="aula29-CRUD-delete-usuario.php?acao=apagar&IdUsuario=<?php echo $id; ?>">Apagar</a> <hr>
            <?php
        endforeach;
        ?>
    </body>
</html>
