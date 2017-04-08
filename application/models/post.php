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

}


?>
