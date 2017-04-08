

<?php

/**
 *
 */
class Articulo extends CI_Controller{

  public function obtener_post($id_post='')
  {
    $this->load->model('post');

    $fila = $this->post->get_post_by_id($id_post);

    $data = array(
			'titulo' => $fila->nombre_post,
			'nombre_app' => 'Blog',
			'post' => $fila->nombre_post,
			'descripcion' => $fila->descripcion_post,
      'contenido' => $fila->contenido_post);

    $this->load->view("head", $data);
  	$this->load->view("nav", $data);
  	$this->load->view("header", $data);
    $this->load->view("post", $data);
    $this->load->view("footer", $data);
  }
}

?>
