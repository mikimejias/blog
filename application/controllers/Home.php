<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->session->sess_destroy();
		$this->load->model('post');

		$data = array(
			'titulo' => 'Home',
			'nombre_app' => 'Blog',
			'post' => 'Blog',
			'descripcion' => 'Bienvenido a mi página web en CodeIgniter',
			'mensaje'=> 'Bienvenido a mi página web' );

		$this->load->view("head", $data);
		$this->load->view("nav", $data);
		$this->load->view("header", $data);

		$resultado_db = $this->post->get_posts('post');
		$data = array('consulta' => $resultado_db );

		$this->load->view("content", $data);
		$this->load->view("footer", $data);
	}
}
