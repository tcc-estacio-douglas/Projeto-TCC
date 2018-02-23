<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require('./class/Aluno.class.php');
            
            $alunoDisciplinaUm = new Aluno("Fulano", 10, "Matemática");
            echo "<pre>";
            $alunoDisciplinaUm->verAluno();
            echo "</pre>";
            
            $alunoDisciplinaDois = clone $alunoDisciplinaUm;
            $alunoDisciplinaDois->setDisciplina("História");
            $alunoDisciplinaDois->setNota(8);
            echo "<pre>";
            $alunoDisciplinaDois->verAluno();
            echo "</pre>";
        ?>
    </body>
</html>
