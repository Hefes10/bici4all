<section class="content">
		<div class="container">
			<div class="col-sm-10 col-md-10">
				<div class="well">
					<h1>Perfil de: <?php echo $usuario; ?></h1>		
				</div>	            

				<?php echo form_open_multipart("modifica_perfil/$id_usuario"); ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Nombre:', 'nombre'); ?>
								<input class="form-control" type="text" placeholder="<?php echo $nombre; ?>" readonly>
								<?php echo form_error('nombre'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Apellido:', 'apellido'); ?>	
								<input class="form-control" type="text" placeholder="<?php echo $apellido; ?>" readonly>
								<?php echo form_error('apellido'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Email:', 'email'); ?>
								<input class="form-control" type="text" placeholder="<?php echo $email; ?>" readonly>
								<?php echo form_error('email'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<?php echo form_label('Password:', 'password'); ?>
								<input class="form-control" type="password" placeholder="******" readonly>
								<?php echo form_error('password'); ?>
							</div>
						</div>
					</div>
                    <div class="col">
							
								<br>
								<?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-warning btn-block mb-3'"); ?>
		

					</div>
				<?php echo form_close(); ?>
			<div>
		
		</div>



    </section>
    <!-- /.content -->