<?php

/**
 * Descrição de Create.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ModelsCreate extends ModelsConn {

    private $Tabela;
    private $Dados;
    private $Resultado;
    private $Msg;
    private $Query;
    private $Conn;

    // metodo responsavel por receber as infomaçoes do formulario
    public function ExeCreate($Tabela, array $Dados) {
        $this->Tabela = (string) $Tabela;
        $this->Dados = $Dados;

        $this->getInstrucao();
        $this->ExecutarInstrucao();
    }

    // metodos de resultados
    public function getResultado() {
        return $this->Resultado;
    }

    public function getMsg() {
        return $this->Msg;
    }

    // metodo para obter dados PDO para preparar query
    private function Conexao() {
        $this->Conn = parent::getConn();
        $this->Query = $this->Conn->prepare($this->Query);
    }

    // metodo para obter informações que estao vindo do BD e preparar query
    private function getInstrucao() {
        $Keys = implode(', ', array_keys($this->Dados)); // pegando chaves, que sao os nomes das colunas
        $Values = ':' . implode(', :', array_keys($this->Dados)); // pegando values, que sao os valores das colunas
        $this->Query = "INSERT INTO {$this->Tabela} ({$Keys}) VALUES ({$Values})";
    }
    
    private function ExecutarInstrucao() {
        $this->Conexao();
        try {
            $this->Query->execute($this->Dados);
            $this->Resultado = $this->Conn->lastInsertId();
        } catch (Exception $e) {
            $this->Resultado = null;
            $this->Msg = "<b>Erro ao cadastrar: </b> {$e->getMessage()}";
        }
    }

}
