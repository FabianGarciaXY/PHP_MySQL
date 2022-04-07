
<?php

class Conexion {

    static public function conectar() {

        #("Servidor; Base de datos", "usuario", "contraseña")
        $pdo = new PDO("mysql:host=localhost;dbname=base", "root", "");
        $pdo -> exec("set names utf8");
        return $pdo;
    }

}

?>