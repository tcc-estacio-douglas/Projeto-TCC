<?php

echo "<h1>Listar usuários</h1>";

foreach ($this->Dados as $users) {
    extract($users);
    echo "ID:".$id."<br>";
    echo "Nome:".$name."<br>";
    echo "E-mail:".$email."<br>";
    echo "<a href=\"".URL."controle-usuario/visualizar/{$id}\">Visualizar</a><br>";
    echo "<a href=\"".URL."controle-usuario/editar/{$id}\">Editar</a><br>";
    echo "<a href=\"".URL."controle-usuario/apagar/{$id}\">Apagar</a><hr>";
}

