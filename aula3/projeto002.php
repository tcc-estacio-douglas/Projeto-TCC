<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // código do corpo do site
        if(phpversion() >= 7.0):
            echo phpversion()." - Ola Mundo!";
        else:
            echo phpversion()." - Necessário atualizar o PHP";
        endif;
        
        echo "<hr>";
        echo ini_get('date.timezone')."<br>";
        echo date('d/m/y H:i:s')."<br>";
        ?>
    </body>
</html>
