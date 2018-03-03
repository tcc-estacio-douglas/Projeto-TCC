<?php

define('URL', 'http://localhost/celke/aula35-mvc-p6/');
// credencias de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'celke');

function __autoload($Class) {
    $dirName = array('controllers', 'models', 'models/helper', 'views', 'config');

    foreach ($dirName as $diretorios) {
        if (file_exists("{$diretorios}/{$Class}.php")):
            require("{$diretorios}/{$Class}.php");
        endif;
    }
}
