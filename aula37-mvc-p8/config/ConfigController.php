<?php

/**
 * Descrição de ModelsUsuario
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ConfigController {

    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlMetodo;
    private $UrlParamentro;
    private static $Format;

    public function __construct() {
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))):
            $this->Url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            $this->limparUrl();
            $this->UrlConjunto = explode("/", $this->Url);

            if (isset($this->UrlConjunto[0])):
                $this->UrlController = $this->slugController($this->UrlConjunto[0]);
            endif;

            if (isset($this->UrlConjunto[1])):
                $this->UrlMetodo = $this->slugMetodo($this->UrlConjunto[1]);
            endif;

            if (isset($this->UrlConjunto[2])):
                $this->UrlParamentro = $this->slugMetodo($this->UrlConjunto[2]);
            else:
                $this->UrlParamentro = null;
            endif;

        else:
            echo "<br>URL: Vazio<br>";
        endif;
    }

    public function limparUrl() {
        //Eliminar as tags
        $this->Url = strip_tags($this->Url);
        //Eliminar espaços em branco
        $this->Url = trim($this->Url);
        //Eliminar a barra no final da URL
        $this->Url = rtrim($this->Url, "/");

        self::$Format = array();
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr--------------------------------';
        $this->Url = strtr(utf8_decode($this->Url), utf8_decode(self::$Format['a']), self::$Format['b']);
    }

    public function slugController($SlugController) {
        $UrlController = str_replace(" ", "", ucwords(implode(" ", explode("-", strtolower($SlugController)))));
        return $UrlController;
    }

    public function slugMetodo($SlugMetod) {
        $SlugMetodo = str_replace(" ", "", ucwords(implode(" ", explode("-", strtolower($SlugMetod)))));
        return lcfirst($SlugMetodo);
    }

    public function carregar() {
        //Verificar se UrlController existe com nome de classe
        if (class_exists($this->UrlController)):
            try {
                $this->carregarMetodo();
            } catch (Exception $e) {
                echo "Erro ao carregar a classe e o método: " . $e->getMessage() . "<br>";
            }
        else:
            echo "Erro ao carregar a classe {$this->UrlController} <br>";
        endif;
    }

    public function carregarMetodo() {
        $classeCarregar = new $this->UrlController();
        //Verificar se existe o método
        if (method_exists($classeCarregar, $this->UrlMetodo)):
            if ($this->UrlParamentro !== null):
                $classeCarregar->{$this->UrlMetodo}($this->UrlParamentro);
            else:
                $classeCarregar->{$this->UrlMetodo}();
            endif;

        else:
            echo "Erro ao carregar o método: {$this->UrlMetodo} <br>";
        endif;
    }

}
