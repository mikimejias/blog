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
			'img_post' => 'home-bg.jpg',
			'mensaje'=> 'Bienvenido a mi página web' );

		$this->load->view("head", $data);
		$this->load->view("nav", $data);
		$this->load->view("header", $data);

		//paginación con bootstrap
		$this->load->library('pagination');

		$config['base_url'] = base_url().'home/index/';
		$config['total_rows'] = $this->post->numero_post();
		$config['per_page'] = 1;
		$config['uri_segment'] = 3;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		//fin paginación con bootstrap

		$resultado_db = $this->post->get_paginacion($config['per_page']);
		$data = array(
			'consulta' => $resultado_db,
		 	'pagination' => $this->pagination->create_links()
		);

		$this->load->view("content", $data);
		$this->load->view("footer", $data);
	}
}
