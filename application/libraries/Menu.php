<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Menu{
		private $arr_menu;
		public function __construct($arr){
			$this->arr_menu = $arr;
		}

		function construirMenu(){
			$ret_menu = "<nav><ul>";
			foreach ($this->arr_menu as $opcion) {

				switch ($opcion) {
					case 'Inicio':
						$ret_menu .= "<li><a href='http://localhost/framework/CodeIgniter/index.php/reportes/'>".$opcion."</a></li>";
						break;

					case 'Nuevo Reporte':
						$ret_menu .= "<li><a href='http://localhost/framework/CodeIgniter/index.php/reportes/nuevoReporte'>".$opcion."</a></li>";
						break;

					default:
						$ret_menu .= "<li><a href='#'>".$opcion."</a></li>";
						break;
				}
			}
			$ret_menu .= "</ul></nav>";
			return $ret_menu;
		}
	}
?>