<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Login extends CI_Controller
{

  public function index()
  {
    $this->load->model('usuario');

    $user = $this->input->post('user');
    $password = $this->input->post('password');

    $usuarioDB = $this->usuario->get_usuario($user);

    if ($usuarioDB != null) {
      if ($usuarioDB->password == $password) {
        $data = array(
          'user' => $user,
          'id' => $usuarioDB->id_sesion,
          'login' => true);
        $this->session->set_userdata($data);

      }
      else {
        header("Location:".base_url());
      }
    }
    else {
      header("Location:".base_url());
    }

  }

  public function log_out()
  {
    $this->session->sess_destroy();
    header("Location:".base_url());
  }
}

?>
