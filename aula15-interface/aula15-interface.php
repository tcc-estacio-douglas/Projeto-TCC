<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require ('./inc/Config.inc.php');
            require ('./interface/ICurso.php');
            
            $curso = new Curso();
            echo $curso->Disciplina("Desenvolvimento WEB");
            echo $curso->Professor("Fulano");
            
            echo $curso->Disciplina("Redes");
            echo $curso->Professor("Ciclano");
        ?>
    </body>
</html>
