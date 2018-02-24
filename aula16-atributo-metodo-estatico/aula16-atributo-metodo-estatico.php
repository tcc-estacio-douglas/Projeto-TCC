<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require ('./inc/Config.inc.php');
            
            $disciplina = new Disciplina("Fulano", 5, 8);
            $disciplina->Situacao();
            
            //$disciplina->SituacaoAluno();
            
            Disciplina::SituacaoAluno();
        ?>
    </body>
</html>
