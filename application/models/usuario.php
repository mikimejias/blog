<?php
/**
 *
 */
class Usuario extends CI_Model
{

  public function get_usuario($user='')
  {
    $resultado = $this->db->query("SELECT * FROM sesion_usuario WHERE user='".$user."'");

    if($resultado->num_rows() > 0)
    {
      return $resultado->row();
    }
    else {
      return null;
    }


  }
}

?>
