<?php

/**
 * Descrição de Delete.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class Delete extends Conn {

    private $Tabela;
    private $Values;
    private $Termos;
    
    private $Resultado;
    private $Msg;
    private $Query;
    private $Conn;

    public function ExeDelete($Tabela, $Termos, $ParseString) {
        $this->Tabela = (String) $Tabela;
        $this->Termos = (string) $Termos;

        parse_str($ParseString, $this->Values); // converter string em variaveis
        
        $this->getInstrucao();
        $this->ExecutarInstrucao();
    }
    
    public function getResultado() {
        return $this->Resultado;
    }
    
    public function getMsg() {
        return $this->Msg;
    }
    
    public function getRowCount() {
        return $this->Query->rowCount();
    }
    
    private function Conexao() {
        $this->Conn = parent::getConn();
        $this->Query = $this->Conn->prepare($this->Query);
    }
    
    private function getInstrucao() {
        $this->Query = "DELETE FROM {$this->Tabela} {$this->Termos}";
    }
    
    private function ExecutarInstrucao() {
        $this->Conexao();
        try {
            $this->Query->execute($this->Values);
            $this->Resultado = true;
            $this->Msg = "<b>Suecesso: </b> Usuario apagado!";
        } catch (Exception $e) {
            $this->Resultado = null;
            $this->Msg = "<b>Erro ao apagar: </b> {$e->getMessage()}";
        }
    }

}
