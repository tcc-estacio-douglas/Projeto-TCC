<?php

// credencias de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'celke');

function __autoload($Class) {
    $dirName = 'class';
    
    if(file_exists("{$dirName}/{$Class}.class.php")):
        require("{$dirName}/{$Class}.class.php");
    else:
        die("Classe {$Class}.class.php não encontrada.");
    endif;
}

