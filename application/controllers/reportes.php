<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Reportes extends CI_Controller{

	function __construct(){	
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('mi_controlador_model');
	}

	function index(){
		$data['segmento'] = $this->uri->segment(3);
		if($data['segmento']){
			$data['reportes'] = $this->mi_controlador_model->obtenerReporte($data['segmento']);
		}else{
			$data['reportes'] = $this->mi_controlador_model->obtenerReportes();
		}

		$this->load->view('reportes/reportes', $data);
	}

	function nuevoReporte(){
		$this->load->view('reportes/formreportes');
	}

	function recibirDatos(){
		$data = array(
			'id' => $this->input->post('id'),
			'titulo' => $this->input->post('titulo'),
			'desc' => $this->input->post('desc'),
			'area' => $this->input->post('area')
			);

		$this->mi_controlador_model->crearReporte($data);

		$this->load->view('mis_views/headers');
		$this->load->view('mis_views/bienvenido', $data);
	}
}

?>