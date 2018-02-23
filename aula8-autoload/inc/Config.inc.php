<?php

function __autoload($Class) {
    $dirName = 'class';
    
    if(file_exists("{$dirName}/{$Class}.class.php")):
        require("{$dirName}/{$Class}.class.php");
    else:
        die("Classe {$Class}.class.php não encontrada.");
    endif;
}

