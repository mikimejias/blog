<?php
/**
 *
 */
class Login extends CI_Controller
{

  public function index()
  {
    $user = $this->input->post('user');
    $password = $this->input->post('password');

    $data_session = array(
      'user' => $user,
      'id' => 0,
      'login' => true);

      $this->session->set_userdata($data_session);

      echo $this->session->userdata('user');

  }
}

?>
