<?php
    class Db{
        private static $conexion=null;
        private function __construct(){} 

        public static function conectar(){
            $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
            self::$conexion=new PDO('mysql:host=byhnmppudorboh5kknxv-mysql.services.clever-cloud.com;dbname=byhnmppudorboh5kknxv','uu0klxxnazgb4gal','vWdvHsIo8U0YXNO6PTOf',$pdo_options);
            return self::$conexion;
        }
    }
?>