<?php

	namespace App\Entity;

	/*if (!defined('CON_CONTROLADOR')) {
		die('Acceso no permitido');
	}
	*/


	/** 
	* Clase que incluye el modelo de nuestra aplicación
	*
	* @author Rubén Sacristán <rsacri27@hotmail.com>
	* @version 1.0.0 Estable
	*/
	class modelo {
	
		/** 
        * Lista los artículos que hay disponibles en la tienda online
        *
        * @return array $articulos Array con los artículos diponibles
        * @author Rubén Sacristán <rsacri27@hotmail.com>
        * @version 1.0.0 Estable
        */
		
		static function getArticulos() {
			$articulos = array(
				0 => array(
					"id" => 0,
					"autor" => "Javier Castillo",
					"titulo" => "El cuco de cristal",
					"imagen" => "cucodecristal.jpg"),	
				1 => array(
					"id" => 1,
					"autor" => "Maria Elena Castillo",
					"titulo" => "La fuerza que hay en ti",
					"imagen" => "lafuerza.jpg"),
				2 => array(
					"id" => 2,
					"autor" => "Megan Maxwell",
					"titulo" => "¿Y a ti qué te pica?",
					"imagen" => "yatiquetepica.jpg"),
				3 => array(
					"id" => 3,
					"autor" => "Andrea Longarela",
					"titulo" => "El color de las cosas invisibles",
					"imagen" => "colorCosasInvisibles.jpg"),
				4 => array(
					"id" => 4,
					"autor" => "Carmen Mola",
					"titulo" => "El Infierno",
					"imagen" => "ElInfierno.jpg"),
			);
			
			return $articulos;
		}

		/** 
        * Lista el artículo buscado según su id
        *
		* @param string $id Identificador único del artículo
        * @return string $elegido Artículo según su id
        * @author Rubén Sacristán <rsacri27@hotmail.com>
        * @version 1.0.0 Estable
        */
		static function articulo($id) {
			$articulos = self::getArticulos();
			$elegido = $articulos[$id];

			return $elegido;
		}

		/** 
        * Lista las sugerencias que han ido dejando en la web
        *
        * @return array $listaSugerencias Array con la lista de sugerencias
        * @author Rubén Sacristán <rsacri27@hotmail.com>
        * @version 1.0.0 Estable
        */
		static function sugerencias() {
			$listaSugerencias = array(
				array(
					"usuario" => "Anna López",
					"sugerencia" => "Simplemente espectacular"),	
				array(
					"usuario" => "Raul García",
					"sugerencia" => "Me encanta, es una pasada"),
				array(
					"usuario" => "El Pepe",
					"sugerencia" => "No me gusta nada, es una ...."),
				array(
					"usuario" => "Laia García",
					"sugerencia" => "Increible, hay de todo"),
			);
			
			return $listaSugerencias;
		}

	}

?>