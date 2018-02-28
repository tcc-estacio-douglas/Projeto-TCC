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
        $LerUsuario->ExeRead('users', 'WHERE name = :name LIMIT :limit', "name=beltrano&limit=6");

        foreach ($LerUsuario->getResultado() as $users):
            extract($users);
            echo $id . "<br>";
            echo $name . "<br>";
            echo $email . "<br>";
            ?>
        <a href="aula27-CRUD-update-form.php?IdUsuario=<?php echo $id; ?>">Editar</a> <hr>
            <?php
        endforeach;
        ?>

    </body>
</html>
