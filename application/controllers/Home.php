<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
    $data = array(
			'title' => 'Home',
			'mensaje'=> 'Bienvenido a mi página web' );
    $this->load->view("home", $data);
	}
}
