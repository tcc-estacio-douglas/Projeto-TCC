<?php

/**
 * Descrição de ModelsUsuario
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ModelsUsuario {
    
    private $Resulado;
    
    public function listar() {
        $Listar = new ModelsRead();
        $Listar->ExeRead('users', 'LIMIT :limit', "limit=12");
        $this->Resulado =$Listar->getResultado();
        
        return $this->Resulado;
    }
    
    function getResulado() {
        return $this->Resulado;
    }


}
