<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php // listar dados vindo do banco de dados
        require ('./inc/Config.inc.php');
        
        $LerUsuario = new Read();
        $LerUsuario->ExeRead('users', 'WHERE name = :name LIMIT :limit', "name=Beltrano&limit=6");
        //var_dump($LerUsuario);
        
        foreach($LerUsuario->getResultado() as $users):
            extract($users);
            echo $id . "<br>";
            echo $name . "<br>";
            echo $email . "<hr>";
        endforeach;
        
        echo "<hr> Niveis de acesso <hr>";
        
        $LerNiveisAcesso = new Read();
        $LerNiveisAcesso->ExeRead('niveis_acessos', 'LIMIT :limit', "limit=6");
        
        foreach($LerNiveisAcesso->getResultado() as $niveis_acessos):
            extract($niveis_acessos);
            echo $id . "<br>";
            echo $nome_niveis_acesso . "<hr>";            
        endforeach;
                
        ?>
    </body>
</html>
