<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
		<div class="container">
		<div class="col-sm-10 col-md-10">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Agregar Usuario
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Agregar Usuario</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="container">
			<div class="well col-lg-8">
				<h2>Cargar nuevo usuario</h2>
			</div>
			
			<div class="row">
				<div class="col-lg-8">

					<?php echo validation_errors(); ?>
					<!-- Genero el formulario para cargar un producto -->

					<div class="well bs-component form-horizontal">
						<?php echo form_open_multipart('verifico_nuevousuario', 
											['class' => 'form-group', 'role' => 'form', 'id' => 'form_registro']); ?>
						<fieldset>
							<div class="form-group">
								<label class="col-lg-2 control-label">Nombre</label>
								<div class="col-lg-10">
									<?php echo form_input(['name' => 'nombre', 
															'id' => 'nombre', 
															'class' => 'form-control',
															'placeholder' => 'Nombre', 
															'autofocus'=>'autofocus',
															'value'=>set_value('nombre')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Apellido</label>
								<div class="col-lg-10">
									<?php echo form_input(['name' => 'apellido', 
															'id' => 'apellido', 
															'class' => 'form-control',
															'placeholder' => 'Apellido', 
															'value'=>set_value('apellido')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<?php echo form_input(['name' => 'email', 
															'id' => 'email', 
															'class' => 'form-control',
															'placeholder' => 'Email@asd.com', 
															'value'=>set_value('email')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Usuario</label>
								<div class="col-lg-10">
									<?php echo form_input(['name' => 'usuario', 
															'id' => 'usuario', 
															'class' => 'form-control',
															'placeholder' => 'Usuario',
															'value'=>set_value('usuario')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Password</label>
								<div class="col-lg-10">
									<?php echo form_input(['name' => 'password', 
															'id' => 'password', 
															'class' => 'form-control',
															'placeholder' => 'Password',
															'value'=>set_value('password')]); ?>
								</div>
							</div>
							</div>
							<div class="col-lg-3 col-lg-offset-5">
								<?php echo form_submit('submit', 'Cargar',"class='btn btn-lg btn-primary btn-block'"); ?> <br>
								<?php echo form_close(); ?>
							</div>
						</fieldset>
						
					</div>
				</div>
			</div>
			</div>
		</div>    

    </section>
    <!-- /.content -->
  </div>

    </section>
    <!-- /.content -->
  </div>