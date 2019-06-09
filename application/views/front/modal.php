<!-- Modal Login-->
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
    
          <?php echo validation_errors(); ?>
                
          <?php echo form_open('verificoUsuario', ['class' => 'form-signin', 'role' => 'form']); ?> <br>
            
          <?php echo form_input(['name' => 'usuario', 
            'id' => 'usuario', 
            'class' => 'form-control',
            'placeholder' => 'Usuario', 
            'required'=>'required', 
            'autofocus'=>'autofocus']); ?>
          <br>
            
          <?php echo form_input(['type' => 'password',
            'name' => 'password', 
            'id' => 'password', 
            'class' => 'form-control',
            'placeholder' => 'Contraseña', 
            'required'=>'required']); ?> <br>
            
          <?php echo form_submit('submit', 'Iniciar sesión',"class='btn btn-form btn-primary display-4'"); ?> <br>
            
          <?php echo form_close(); ?>
      
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url('registrarse');?>">¿No estás registrado?</a>
      </div>
    </div>
  </div>
</div>
<!-- /Modal -->


<!-- Modal Detalle Venta-->
<div class="modal fade" id="modalDetalle" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">DETALLE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      <div class="modal-body">
    
          
      
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
<!-- /Modal -->