<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

      <?php
        foreach ($consulta->result() as $fila) {
      ?>
        <div class="post-preview">
          <?php
          $fecha = DateTime::createFromFormat("Y-m-d", $fila->fecha_post);
          $year = $fecha->format("Y");

          $nombre = str_replace(" ", "_", $fila->nombre_post);
          ?>
          <a href="<?= base_url()?>articulo/obtener_post/<?= $year ?>/<?= $nombre ?>">
            <h2 class="post-title">
              <?= $fila->nombre_post ?>
            </h2>
            <h3 class="post-subtitle">
              <?= $fila->descripcion_post ?>
            </h3>
          </a>
          <p class="post-meta">Posted by <a href="#">Miki</a> on <?= $fila->fecha_post ?></p>
        </div>
        <hr>
      <?php
        }
      ?>

      <!-- Pager -->
      <?php echo $pagination; ?>
    </div>
  </div>
</div>
<hr>
