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
            $conn->getConn();
            
            var_dump($conn);
            
        ?>
    </body>
</html>
