<?php

/**
 * Descrição de ControleUsuario
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ControleUsuario {
    
    public function index() {
        echo "Controller Usuário - Método LISTAR usuários<br>";
        
        include_once 'views/usuario/ListarUsuario.php';
    }
    
    public function cadastrar() {
        echo "Controller Usuário - Método CADASTRAR usuário<br>";
        
        include_once 'views/usuario/CadastrarUsuario.php';
        
        $Dados = array ('id'=> 2, 'nome'=>"Fulano");
        
        $CadastrarUsuario = new ModelsUsuario();
        $CadastrarUsuario->ExeCreate('usuarios', $Dados);
        echo $CadastrarUsuario->getMsg();
    }
}
