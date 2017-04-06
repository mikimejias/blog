<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
    $data = array('title' => 'Home', 'mensaje'=> 'Hola mundo en CodeIgniter' );
    $this->load->view("home", $data);
	}
}
