<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   *
   */
  class Perfil extends CI_Controller
  {

    public function index()
    {
      $data = array(
  			'titulo' => 'Perfil',
  			'nombre_app' => 'Blog',
  			'post' => 'Mi perfil',
  			'descripcion' => 'En esta página se podrá manejar los posts',
        'img_post' => 'home-bg.jpg',
  			'mensaje'=> 'Bienvenido a mi página web' );

  		$this->load->view("head", $data);
  		$this->load->view("nav", $data);
  		$this->load->view("header", $data);

  		$this->load->view("content_user", $data);
  		$this->load->view("footer", $data);
    }
  }

?>
