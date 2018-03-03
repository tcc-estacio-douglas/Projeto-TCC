<?php

/**
 * Descrição de ModelsUsuario
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ModelsUsuario {
    
    private $Resulado;
    private $UserId;
    
    public function listar() {
        $Listar = new ModelsRead();
        $Listar->ExeRead('users', 'LIMIT :limit', "limit=12");
        $this->Resulado =$Listar->getResultado();
        
        return $this->Resulado;
    }
    
    public function visualizar($UserId) {
        $this->UserId = (int) $UserId;
        $Visualizar = new ModelsRead();
        $Visualizar->ExeRead('users', 'WHERE id = :id LIMIT :limit', "id={$this->UserId}&limit=1");
        $this->Resulado = $Visualizar->getResultado();
        return $this->Resulado;
    }
    
    function getResulado() {
        return $this->Resulado;
    }


}
