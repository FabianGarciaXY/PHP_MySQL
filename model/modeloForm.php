
<?php

require_once "conexion.php";

    class ModeloFormnulario {
        

        static public function modeloRegistro($tabla, $datos) {

            $respuestaBD = Conexion::conectar()->prepare("INSERT INTO $tabla(dato) VALUES (:dato)");
            $respuestaBD -> bindParam(":dato", $datos["dato"], PDO::PARAM_STR);

            if ($respuestaBD -> execute()) {
                return 'ok';
            } else {
                print_r(Conexion::conectar()->errorInfo());
            }
        }

        static public function modeloSeleccionarRegistros($tabla) {
            $respuestaBD = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");
            $respuestaBD -> execute();

            return $respuestaBD-> fetchAll();
        }

        
    }


?>