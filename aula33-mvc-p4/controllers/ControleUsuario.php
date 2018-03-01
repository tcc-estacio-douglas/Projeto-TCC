<?php

/**
 * Descrição de ControleUsuario
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ControleUsuario {
    
    public function index() {
        echo "Controller Usuário - Método LISTAR usuários<br>";
        
        $CarregarView = new ConfigView("usuario/ListarUsuario");
        $CarregarView->renderizar();
    }
    
    public function cadastrar() {
        echo "Controller Usuário - Método CADASTRAR usuário<br>";
        
        $CarregarView = new ConfigView("usuario/CadastrarUsuario");
        $CarregarView->renderizar();
        
        $Dados = array ('id'=> 2, 'nome'=>"Fulano");
        
        $CadastrarUsuario = new ModelsUsuario();
        $CadastrarUsuario->ExeCreate('usuarios', $Dados);
        echo $CadastrarUsuario->getMsg();
    }
}
