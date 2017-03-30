<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mi_controlador_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function crearReporte($data){
		$query = $this->db->insert('reportes', array('id' =>$data['id'],
											'titulo' =>$data['titulo'],
											'contenido' =>$data['desc'],
											'area' =>$data['area']
			));
	}

	function obtenerReportes(){
		$query = $this->db->get('reportes');
		if($query->num_rows() > 0) return $query;
		else return false;
	}

	function obtenerReporte($id){
		$this->db->where('id', $id);
		$query = $this->db->get('reportes');
		if($query->num_rows() > 0) return $query;
		else return false;
	}
}

?>