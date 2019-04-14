<!-- Footer -->
<footer>
  <div class="footer-nav">
    <div class="container">
      <div id="rowFooter" class="row">
        <div class="col-12 col-md">
          <a href="<?php echo base_url('quienessomos');?>">¿Quiénes somos?</a>
        </div>
        <div class="col-12 col-md">
          <a href="<?php echo base_url('comercializacion');?>">Comercialización</a>
        </div>
        <div class="col-12 col-md">
          <a href="<?php echo base_url('contacto');?>">Contacto</a>
        </div>
        <div class="col-12 col-md">
          <a href="<?php echo base_url('terminosycondiciones');?>">Términos y condiciones</a>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col text-align-center">
            <h4>SIGUENOS</h4>
            <p>Queremos saber de ti</p>
            <br>
        </div>
      </div>
      <div class="row">
        <ul>
          <li>
            <a href="http://www.facebook.com" target="_blank">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="http://www.twitter.com" target="_blank">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="http://www.instagram.com" target="_blank">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col mt-auto">
          <p>Copyright © 2019 BC4ALL. Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">LOGIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      <div class="modal-body">
        <form>
          <div class="form-row">
            <div class="form-group col">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Constraseña" aria-label="Password" aria-describedby="basic-addon1">
              </div>
              <a href="#">No estoy registrado</a>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-platzi">Ingresar</button>
      </div>
    </div>
  </div>
</div>
<!-- /Modal -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/principal.js"></script>
</body>
</html>
