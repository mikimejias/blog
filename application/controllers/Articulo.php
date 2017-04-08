

<?php

/**
 *
 */
class Articulo extends CI_Controller{

  public function obtener_post($id_post='')
  {
    $this->load->model('post');

    $fila = $this->post->get_post_by_id($id_post);

    echo $fila->nombre_post;
    echo $fila->contenido_post;
  }
}

?>
