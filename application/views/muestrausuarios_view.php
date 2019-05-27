<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Todos los usuarios
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Todos los usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<?php $session_data = $this->session->userdata('logged_in'); ?>
		<?php if (!$usuarios) { ?>

		<div class="container">
			<div class="well">
				<h1>No hay Usuarios</h1>
			</div>
			<?php if( ($this->session->userdata('logged_in')) and ($session_data['id_perfil'] == '1')) { ?>
				<a type="button" class="btn btn-success" href="<?php echo base_url('agregar_usuario'); ?>">Agregar</a>
				<a type="button" class="btn btn-danger" href="<?php echo base_url('muestra_usuariosEliminados'); ?>">ELIMINADOS</a>
				<br> <br>
			<?php } ?>	
		</div>

		<?php } else { ?>

			<div class="container">
				<a type="button" class="btn btn-success" href="<?php echo base_url('agregar_usuario'); ?>">Agregar</a>
				<a type="button" class="btn btn-danger" href="<?php echo base_url('muestra_usuariosEliminados'); ?>">ELIMINADOS</a>
				<br> <br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Email</th>
							<th>Usuario</th>
							<th>Password</th>
							<th>Perfil</th>
							<th>Baja</th>
							<th>Modificar</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($usuarios->result() as $row){ ?>
						<tr>
							<td><?php echo $row->id_usuario;  ?></td>
							<td><?php echo $row->nombre;  ?></td>
							<td><?php echo $row->apellido;  ?></td>
							<td><?php echo $row->email;  ?></td>
							<td><?php echo $row->usuario;  ?></td>
							<td><?php echo $row->password;  ?></td>
							<td><?php echo $row->id_perfil;  ?></td>
							<td><?php echo $row->baja;  ?></td>
							<td><a href="<?php echo base_url("usuarios_modifica/$row->id_usuario");?>">Modificar</a>|<a href="<?php echo base_url("usuarios_elimina/$row->id_usuario");?>">Eliminar</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>	            
			</div>

		<?php } ?>

    </section>
    <!-- /.content -->
  </div>