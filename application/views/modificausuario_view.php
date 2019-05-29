<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Modificar Usuario
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Modificar Usuario</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="container">
			<div class="col-sm-10 col-md-10">
				<div class="well">
					<h1>Modificar Datos</h1>		
				</div>	            

				<?php echo form_open_multipart("verifico_modificausuario/$id_usuario", ['class' => 'form-signin', 'role' => 'form']); ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Nombre:', 'nombre'); ?>
								<?php echo form_input(['name' => 'nombre', 
																'id' => 'nombre', 
																'class' => 'form-control',
																'placeholder' => 'Nombre', 
																'autofocus'=>'autofocus',
																'value'=>"$nombre"]); ?>
								<?php echo form_error('nombre'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Apellido:', 'apellido'); ?>	
								<?php echo form_input(['name' => 'apellido', 
																'id' => 'apellido', 
																'class' => 'form-control',
																'placeholder' => 'Apellido', 
																'value'=>"$apellido"]); ?>
								<?php echo form_error('apellido'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Email:', 'email'); ?>
								<?php echo form_input(['name' => 'email', 
																'id' => 'email', 
																'class' => 'form-control',
																'placeholder' => 'Email', 
																'value'=>"$email"]); ?>
								<?php echo form_error('email'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Usuario:', 'usuario'); ?>
								<?php echo form_input(['name' => 'usuario', 
																'id' => 'usuario', 
																'class' => 'form-control',
																'placeholder' => 'Usuario',
																'value'=>"$usuario"]); ?>
								<?php echo form_error('usuario'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Password:', 'password'); ?>
								<?php echo form_input(['name' => 'password', 
																'id' => 'password', 
																'class' => 'form-control',
																'placeholder' => 'Password',
																'value'=>"$password"]); ?>
								<?php echo form_error('password'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Perfil:', 'id_perfil'); ?>
								<?php echo form_input(['name' => 'id_perfil', 
																'id' => 'id_perfil', 
																'class' => 'form-control',
																'placeholder' => '1- Admin 2- Usuario',
																'value'=>"$id_perfil"]); ?>
								<?php echo form_error('id_perfil'); ?>
							</div>
						</div>
					</div>
                    <div class="col-md-6">
							
								<br>
								<?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-warning btn-block'"); ?>
		

					</div>
				<?php echo form_close(); ?>
			<div>
		
		</div>



    </section>
    <!-- /.content -->
</div>