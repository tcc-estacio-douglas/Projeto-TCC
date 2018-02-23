<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require('./class/Aluno.class.php');
        $aluno = new Aluno("Fulano", 10);

        

        echo "<pre>";
        $aluno->verAluno();
        echo "</pre>";
        ?>
    </body>
</html>
