<?php

echo "<h1>Listar usuários</h1>";
echo "<p>".$_SESSION['msg']."</p>";
foreach ($this->Dados as $user) {
    extract($user);
    echo "ID: " . $id . "<br>";
    echo "Nome: " . $name . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "<a href=\"" . URL . "controle-usuario/visualizar/{$id}\">Visulizar</a><br>";
    echo "<a href=\"" . URL . "controle-usuario/editar/{$id}\">Editar</a><br>";
    echo "<a href=\"" . URL . "controle-usuario/apagar/{$id}\">Apagar</a><hr>";
}