<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<?php if (!$usuarios) { ?>

			<div class="container">
				<div class="well">
					<h1>No hay Eliminados</h1>
				</div>	
			</div>

		<?php } else { ?>

		<div class="container">
			<div class="well">
				<h1>Todos los Usuarios Eliminados</h1>
			</div>	

			<table id="example" class="table table-bordered table-hover display nowrap" style="width:100%">
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
						<td><a href="<?php echo base_url("usuarios_modifica/$row->id_usuario");?>">Modificar</a>|<a href="<?php echo base_url("usuarios_activa/$row->id_usuario");?>">Activar</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>	            
		</div>

		<?php } ?>

    </section>
    <!-- /.content -->
  </div>

