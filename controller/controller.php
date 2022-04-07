
<?php


# Controlador de la vista 
class MvcController {
	public function plantilla() {
	include "views/template.php";
	}
}


class FormController {


	# Controlador de registros en el Form
	static public function formController() {

        if (isset($_POST["item"])) {

			$tabla = 'tabla';
			$dato = array('dato' => $_POST["item"]);

			$response = ModeloFormnulario::modeloRegistro($tabla, $dato);

			return $response;
		}
	}

	# Controlador de seleccion de registros en el Form
	static public function seleccionarRegistrosController() {
		$tabla = "tabla";
		$respuesta = ModeloFormnulario::modeloSeleccionarRegistros($tabla);

		return $respuesta;
	}
}

?>