<?php

/**
 * Descrição de Disciplina.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class Disciplina {
    public $Aluno;
    public $NotaTrabalho;
    public $NotaProva;
    
    public static $Media; // metodo estatic não pode ser acessado fora da classe onde ele se encontra
    
    function __construct($Aluno, $NotaTrabalho, $NotaProva) {
        $this->Aluno = $Aluno;
        $this->NotaTrabalho = $NotaTrabalho;
        $this->NotaProva = $NotaProva;
        self::$Media = ($this->NotaProva + $this->NotaTrabalho) / 2;
    }
    
    public function Situacao() {
        if(self::$Media >= 7):
            echo "Aluno(a) {$this->Aluno} está <b>aprovado!</b> Sua média foi ".self::$Media."<hr>";
        else:
            echo "Aluno(a) {$this->Aluno} está <b>em recuperaçao!</b> Sua média foi ".self::$Media."<hr>";
        endif;
    }
    
    public static function SituacaoAluno() {
        if(self::$Media >= 7):
            echo "Média foi ".self::$Media."<hr>";
        else:
            echo "Média foi ".self::$Media."<hr>";
        endif;
    }

}
