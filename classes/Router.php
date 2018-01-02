<?php

class Router {
	var $vistas = 'views/';
	var $noencontrado = '404.html';

	function rewrite($url,$submodulos=false){
		global $moduloURL;

		// Formateo la URL
		$url_items = $this->formatear_url($url);

		$parmURL = $this->getVariables($url_items);

		if(isset($url_items[CONT_VARURL])){
			$moduloURL = $url_items[CONT_VARURL];
			if($submodulos){
				if (!isset($url_items[CONT_VARURL+1])) {
					return $this->vistas.$moduloURL.'/index.php';
				}else{
					return $this->vistas.$moduloURL.'/'.$url_items[CONT_VARURL+1].'/index.php';
				}
			}else{
				return $this->vistas.$moduloURL.'/index.php';
			}

		} else {
			return $this->vistas.'index.php';
		}
	}

	// Extrae de la URL el MODULO, CONTROLADOR, VARIABLES y las coloca en un ARRAY
	function formatear_url($url){
		// Limpio la url en caso de que la hallan escrito con el 
		// ultimo parametro sin valor es decir controller/action/
		$url = trim($url,'/');

		// Obtengo y asigno todos los parametros de la url 
		$url_items = explode ('/', $url);

		// Se limpian los parametros por seguridad
		$clean = array( '\\', '..');

		$url_items = str_replace($clean, '', $url_items, $errors);

		return $url_items;
	}

	function getVariables($url_items){
		// Llamado de variables globales
		global $parmURL;

		$parmURL = array();
		
		if(isset($url_items[CONT_VARURL+1])){
			$c=-1;
			foreach ($url_items as $key => $value) {
				$c++;
				if($c>CONT_VARURL){
					array_push($parmURL, $value);
				}
			}
		}
	}
}