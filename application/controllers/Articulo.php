

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

  public function nuevo()
  {
    $data = array(
      'titulo' => 'Crear Nuevo Post',
      'nombre_app' => 'Blog',
      'post' => 'Crear nuevo post',
      'descripcion' => 'Creando un nuevo post',
      'mensaje'=> 'Bienvenido a mi página web' );

    $this->load->view("head", $data);
    $this->load->view("nav", $data);
    $this->load->view("header", $data);

    $this->load->helper('bootstrap');

    $this->load->view("nuevo_post", $data);
    $this->load->view("footer", $data);
  }

  public function crear()
  {
    $post =$this->input->post();

    $this->load->model('file');
    $img_post = $this->file->UploadImage('./public/img', 'No es posible subir la imagen');
    $post['img_post'] = $img_post;
    $bool = $this->post->crear_nuevo_post($post);

    if ($bool)
    {
      header("Location: ".base_url()."perfil");
    }
    else {
      header("Location: ".base_url()."articulo/nuevo");
    }
  }
}

?>
