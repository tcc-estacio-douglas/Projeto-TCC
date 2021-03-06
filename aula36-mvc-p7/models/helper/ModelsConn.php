<?php

/**
 * Descrição de Conn.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
abstract class ModelsConn {
    
    public static $Host = HOST;
    public static $User = USER;
    public static $Pass = PASS;
    public static $Dbname = DBNAME;
    
    private static $Connect = null;
    
    // conectar BD com PDO
    private static function Conectar() {
        try {
            if(self::$Connect == null):
                self::$Connect = new PDO('mysql:host='.self::$Host.';dbname='.self::$Dbname, self::$User, self::$Pass);
            //echo "Conexão realizada com sucesso!";
            endif;
        } catch (Exception $e) {
            echo 'Mensagem: '.$e->getMessage();
            die;
        }
        return self::$Connect;
    }
    
    protected function getConn() {
        return self::Conectar();
    }
}
