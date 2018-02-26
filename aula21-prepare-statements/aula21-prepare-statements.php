<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');

        $conn = new Conn();
        $name = "Fulano";
        $email = "fulaninho02@bit.com";
        try {
            $Cadastro = "INSERT INTO users (name, email) VALUES (:name, :email)";
            $Cadastrar = $conn->getConn()->prepare($Cadastro);
            
            $Cadastrar->bindParam(':name', $name, PDO::PARAM_STR);
            $Cadastrar->bindParam(':email', $email, PDO::PARAM_STR);
            
            $Cadastrar->execute();
            
            if($Cadastrar->rowCount()):
                echo "Cadastrado com sucesso!";
            endif;
            
        } catch (Exception $e) {
            echo 'Mensagem: '.$e->getMessage();
        }
        ?>
    </body>
</html>
