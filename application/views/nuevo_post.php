<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
      <?php
      echo form_open_multipart("articulo/crear");
      echo form_input_text('nombre_post', 'Ingresa nombre del post');
      echo form_input_text('descripcion_post', 'Escribe una breve descripción');
      echo form_input_textarea('contenido_post','Escribe el contenido de tu post');
      echo form_input_file('Selecciona imagen para el post');
      echo form_submit("Enviar formulario");
      echo form_close();
      ?>
    </div>
  </div>
</div>
<hr>
