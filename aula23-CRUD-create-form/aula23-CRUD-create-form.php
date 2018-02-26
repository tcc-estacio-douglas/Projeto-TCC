<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <header>
            <h1>Cadastrar Usuário</h1>
        </header>
        <?php
        require ('./inc/Config.inc.php');

        $Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($Dados['SendCadUsuario'])):
            unset($Dados['SendCadUsuario']);

            $cadUsuario = new Usuario();
            $cadUsuario->ExeCreate($Dados);
            if (!$cadUsuario->getResultado()):
                echo $cadUsuario->getMsg();
            else:
                echo $cadUsuario->getMsg();
            endif;

        endif;
        ?>
        <form name="CadUsuario" action="" method="POST" enctype="multipart/for-data">

            <label>Nome: </label>
            <input type="text" name="name" placeholder="Digite seu nome" value="<?php
            if (isset($Dados)): echo $Dados['name']; endif;
            ?>"><br><br>

            <label>E-mail: </label>
            <input type="email" name="email" placeholder="Digite seu e-mail" value="<?php
            if (isset($Dados)): echo $Dados['email']; endif;
            ?>"><br><br>

            <label>Senha: </label>
            <input type="password" name="password" placeholder="Digite sua senha"><br><br>

            <input type="submit" value="Cadastrar" name="SendCadUsuario">

        </form>
    </body>
</html>
