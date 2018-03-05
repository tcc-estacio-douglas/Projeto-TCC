<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - MVC</title>
    </head>
    <body>
        <?php
        require './config/Config.php';
        
        $Url = new ConfigController();
        $Url->carregar();
        ?>
    </body>
</html>
