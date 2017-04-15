<?php

/**
 *
 */
class Post extends CI_Model
{
  public function get_posts()
  {
    return $this->db->get('post');
  }

  public function get_post_by_id($id_post)
  {
    $resultado = $this->db->query("SELECT * FROM post WHERE id_post='".$id_post."'");

    return $resultado->row();
  }

  public function crear_nuevo_post($post =null)
  {
    if ($post != null)
    {
      $nombre_post = $post['nombre_post'];
      $descripcion_post = $post['descripcion_post'];
      $contenido_post = $post['contenido_post'];
      $img_post = $post['img_post'];

      $SQL = "INSERT INTO post(id_post,	nombre_post, descripcion_post, contenido_post, img_post, fecha_post) VALUES (null, '$nombre_post', '$descripcion_post', '$contenido_post', '$img_post', curdate())";

      if ($this->db->query($SQL))
      {
        return true;
      }
    }
    return false;
  }

  public function get_post_by_year_and_name($year='', $nombre_post='')
  {
    $resultado = $this->db->query("SELECT * FROM post WHERE year(	fecha_post)= '$year' AND nombre_post LIKE '$nombre_post'");

    return $resultado->row();
  }

  public function numero_post()
  {
    $numero_post = $this->db->query("SELECT count(*) as numero_post from post")->row()->numero_post;

    return intval($numero_post);
  }

  public function get_paginacion($numero_por_pagina)
  {
    return $this->db->get("post",$numero_por_pagina, $this->uri->segment(3));
  }

}


?>
