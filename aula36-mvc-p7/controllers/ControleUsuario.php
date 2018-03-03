<?php

/**
 * Descrição de ControleUsuario
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ControleUsuario {

    private $Dados;

    public function index() {
        $ListarUsuarios = new ModelsUsuario();
        $this->Dados = $ListarUsuarios->listar();
        $CarregarView = new ConfigView("usuario/listarUsuario", $this->Dados);
        $CarregarView->renderizar();
    }

    public function cadastrar() {
        $Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($Dados['SendCadUsuario'])):
            unset($Dados['SendCadUsuario']);

            $CadUsuario = new ModelsUsuario();
            $CadUsuario->cadastrar($Dados);
            if (!$CadUsuario->getResulado()):
                $Dados['msg'] = $CadUsuario->getMsg();
            else:
                $Dados['msg'] = $CadUsuario->getMsg();
                $UrlDestino = URL . 'controle-usuario/index';
                header("Location: $UrlDestino");
            endif;

        else:
            $Dados = null;
        endif;
        
        $CarregarView = new ConfigView("usuario/cadastrarUsuario", $Dados);
        $CarregarView->renderizar();
    }

    public function visualizar($UserId) {
        $VerUsuario = new ModelsUsuario();
        $this->Dados = $VerUsuario->visualizar($UserId);
        $CarregarView = new ConfigView("usuario/visualizarUsuario", $this->Dados);
        $CarregarView->renderizar();
    }

}
