<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <a href="<?=base_url()?>articulo/nuevo"class="btn btn-default">Crear nuevo post</a>
    </div>
    <hr>
    <?php
      if($posts){
    ?>
    <div class="col-lg-12">
      <h3>Tus posts</h3>
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>Nombre del Post</th>
            <th>Descripción</th>
            <th>Contenido</th>
            <th>Modificar</th>
            <th>Eliminar</th>
          </tr>
          <tbody>

          <?php
          foreach ($posts->result() as $post_a_mostrar)
          {
          ?>
          <tr id="tr<?= $post_a_mostrar->id_post?>">
            <td><?= $post_a_mostrar->nombre_post?></td>
            <td><?= $post_a_mostrar->descripcion_post?></td>
            <td><?= $post_a_mostrar->contenido_post?></td>
            <td>
              <button class="btn btn-default" type="submit">Modificar</button>
            </td>
            <td>
              <button name="PostCI" id="<?= $post_a_mostrar->id_post?>" class="btn btn-default" type="submit">Eliminar</button>
            </td>

          </tr>
          <?php
      			}
      		?>
      		</tbody>
      		<tfoot>
      			<tr>
      				<td colspan="5">

      				</td>
      			</tr>
      		</tfoot>
      	</table>
      	<?php
      		}
      		else
          {
      	?>
            <p class='bg-info' style='padding:20px;'>
      				No hay posts para mostrar. Si desea ingresar un nuevo módulo, puede hacerlo a través del botón: " <strong>Crear Nuevo Post</strong> "
      			</p>
      	<?php
      		}
      	?>
      </div>

    </div>
  </div>
</div>
<hr>
