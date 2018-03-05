<?php

/**
 * Descrição de ControleUsuario
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ControleUsuario {

    private $Dados;
    private $UserId;

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
            if (!$CadUsuario->getResultado()):
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

    public function editar($UserId) {
        $Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($Dados['SendEditUsuario'])):
            unset($Dados['SendEditUsuario']);
            $EditaUsuario = new ModelsUsuario();
            $EditaUsuario->editar($UserId, $Dados);

            if (!$EditaUsuario->getResultado()):
                $Dados['msg'] = $EditaUsuario->getMsg();
            else:
                $Dados['msg'] = $EditaUsuario->getMsg();
                $UrlDestino = URL . 'controle-usuario/visualizar/' . $UserId;
                header("Location: $UrlDestino");
            endif;

        else:
            $VerUsuario = new ModelsUsuario();
            $Dados = $VerUsuario->visualizar($UserId);
            var_dump($Dados);
        endif;

        $CarregarView = new ConfigView("usuario/editarUsuario", $Dados);
        $CarregarView->renderizar();
    }

    public function apagar($UserId = null) {
        $this->UserId = (int) $UserId;
        if (!empty($this->UserId)):
            echo "Usuario a ser apagado: {$this->UserId}<br>";
            $ApagarUsuario = new ModelsUsuario();
            $ApagarUsuario->apagar($this->UserId);
        else:
            $_SESSION['msg'] =  "Necessario selecionar um usuario<br>";
        endif;

        $UrlDestino = URL . 'controle-usuario/index';
        header("Location: $UrlDestino");
    }

}
