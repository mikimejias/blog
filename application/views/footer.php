    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <ul class="list-inline text-center">
              <li>
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Miguel Mejias 2017</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery -->
    <script src="<?= base_url() ?>libs/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>libs/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= base_url() ?>libs/js/jqBootstrapValidation.js"></script>
    <script src="<?= base_url() ?>libs/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?= base_url() ?>libs/js/clean-blog.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function () {
        $("button").on("click", function (e) {
          var name = $(this).attr('name');
          var id = $(this).attr('id');

          var request;

          if(request)
          {
            request.abort();
          }

          request = $.ajax({
            url: "<?= base_url('articulo/borrar_post') ?>",
            type: "POST",
            data: "id_post=" + id
          });

          request.done(function (response, textStatus, jqXHR)
          {
            console.log("response:" + response);
            $("#tr"+response).html("");
          });

          request.fail(function (jqXHR, textStatus, thrown)
          {
            console.log("Error:" + textStatus);
          });

          request.always(function ()
          {
            console.log("Terminó la ejecución de ajax");
          });

          e.preventDefault();
        });
      });
    </script>

  </body>

</html>
