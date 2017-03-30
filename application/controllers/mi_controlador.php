<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mi_Controlador extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('mi_controlador_model');
	}

	function index(){
		$this->load->library('menu', array('Inicio', 'Nuevo Reporte', 'Contacto', 'Nosotros'));
		$data['mi_menu'] = $this->menu->construirMenu();
		$this->load->view('mis_views/headers');
		$this->load->view('mis_views/bienvenido', $data);
	}

	function miFuncion(){
		$this->load->view('mis_views/headers');
		$this->load->view('mis_views/bienvenido');
	}
}

?>