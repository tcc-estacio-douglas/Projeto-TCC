<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');
        //echo "Estou editando... <br>";

        $IdUsuario = filter_input(INPUT_GET, 'IdUsuario', FILTER_VALIDATE_INT);
        //echo "ID do usuario: ". $IdUsuario . "<hr>";

        $Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($Dados['SendUpdUsuario'])):
            unset($Dados['SendUpdUsuario']);
            $UpdUsuario = new Usuario();
            $UpdUsuario->ExeUpdate($IdUsuario, $Dados);
            echo $UpdUsuario->getMsg();
        else:
            $LerUsuario = new Read();
            $LerUsuario->ExeRead("users", "WHERE id = :id LIMIT :limit", "id={$IdUsuario}&limit=1");
            if($LerUsuario->getResultado()):
                $Usuario = $LerUsuario->getResultado()[0];
                unset($Usuario['password']);
            endif;
        endif;
        ?>

        <form name="UpdUsuario" action="" method="POST" enctype="multipart/for-data">

            <label>Nome: </label>
            <input type="text" name="name" placeholder="Digite seu nome" value="<?php 
            if (!empty($Usuario['name'])): echo $Usuario['name'];
            endif;
            ?>"><br><br>

            <label>E-mail: </label>
            <input type="email" name="email" placeholder="Digite seu e-mail" value="<?php
                   if (!empty($Usuario['email'])): echo $Usuario['email'];
                   endif;
                   ?>"><br><br>

            <label>Senha: </label>
            <input type="password" name="password" placeholder="Digite sua senha"><br><br>

            <input type="submit" value="Editar" name="SendUpdUsuario">

        </form>
    </body>
</html>
