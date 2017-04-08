<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array(
			'titulo' => 'Home',
			'nombre_app' => 'Blog',
			'post' => 'Blog',
			'descripcion' => 'Bienvenido a mi página web en CodeIgniter',
			'mensaje'=> 'Bienvenido a mi página web' );

		$this->load->view("head", $data);
		$this->load->view("nav", $data);
		$this->load->view("header", $data);

		$resultado_db = $this->db->get('post');
		$data = array('consulta' => $resultado_db );

		$this->load->view("content", $data);
		$this->load->view("footer", $data);
	}
}
