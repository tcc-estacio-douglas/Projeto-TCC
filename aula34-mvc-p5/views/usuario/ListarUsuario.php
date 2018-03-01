<?php

echo "<h1>Listar usuários</h1>";

foreach ($this->Dados as $users) {
    extract($users);
    echo "ID:".$id."<br>";
    echo "Nome:".$name."<br>";
    echo "E-mail:".$email."<hr>";
}

