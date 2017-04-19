<?php
/**
 *
 */
class Articulo extends CI_Controller{

  public function obtener_post($year, $nombre_post)
  {
    $this->load->model('post');

    //$fila = $this->post->get_post_by_id($id_post);

    $fila = $this->post->get_post_by_year_and_name($year, $nombre_post);

    if ($fila == null)
    {
      echo "ERROR";
      return;
    }

    if (!isset($fila->img_post) || $fila->img_post == '') {
      $fila->img_post = 'home-bg.jpg';
    }

    $data = array(
			'titulo' => $fila->nombre_post,
			'nombre_app' => 'Blog',
			'post' => $fila->nombre_post,
			'descripcion' => $fila->descripcion_post,
      'img_post'=> $fila->img_post,
      'contenido' => $fila->contenido_post);

    $this->load->view("head", $data);
  	$this->load->view("nav", $data);
  	$this->load->view("header", $data);
    $this->load->view("post", $data);
    $this->load->view("footer", $data);
  }

  public function nuevo()
  {
    /*
    if (!$this->session->userdata('login'))
    {
      header("Location:".base_url());
    }
    */
    $data = array(
      'titulo' => 'Crear Nuevo Post',
      'nombre_app' => 'Blog',
      'post' => 'Crear nuevo post',
      'descripcion' => 'Creando un nuevo post',
      'img_post' => 'home-bg.jpg',
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
    /*
    if (!$this->session->userdata('login'))
    {
      header("Location:".base_url());
    }
    */

    $this->load->model('post');

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

  public function borrar_post()
  {
    $this->load->model('post');

    $post = $this->input->post();

    //$nombre_post = $post['nombre_post'];
    $id_post = $post['id_post'];

    $this->post->borrar_post($id_post);
  }
}

?>
