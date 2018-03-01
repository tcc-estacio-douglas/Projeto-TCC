<?php

/**
 * Descrição de ConfigView
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ConfigView {

    private $Nome;

    public function __construct($Nome) {
        $this->Nome = (string) $Nome;
    }

    public function renderizar() {
        if (file_exists('views/' . $this->Nome . '.php')):
            include 'views/' . $this->Nome . '.php';
        else:
            echo "Erro ao carrgar a VIEW: {$this->Nome}";
        endif;
    }

}
