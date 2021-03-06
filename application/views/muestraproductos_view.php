<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Todos los productos
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Todos los productos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<?php $session_data = $this->session->userdata('logged_in'); ?>
		<?php if (!$productos) { ?>

		<div class="container">
			<div class="well">
				<h1>No hay Productos</h1>
			</div>
			<?php if( ($this->session->userdata('logged_in')) and ($session_data['id_perfil'] == '1')) { ?>
				<a type="button" class="btn btn-success" href="<?php echo base_url('agregar_producto'); ?>">Agregar</a>
				<a type="button" class="btn btn-danger" href="<?php echo base_url('muestra_eliminados'); ?>">ELIMINADOS</a>
				<br> <br>
			<?php } ?>	
		</div>

		<?php } else { ?>

			<div class="container">
				<a type="button" class="btn btn-success" href="<?php echo base_url('agregar_producto'); ?>">Agregar</a>
				<a type="button" class="btn btn-danger" href="<?php echo base_url('muestra_eliminados'); ?>">ELIMINADOS</a>
			</div>

			<br>
			
			<div class="box box-solid">
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<table id="example" class="table table-striped table-responsive-lg table-bordered table-hover display nowrap" style="width:100%">
								<thead>
									<tr>
										<th>ID</th>
										<th>Marca</th>
										<th>Modelo</th>

										<th>Clase</th>
										<th>Precio Venta</th>
										<th>Stock</th>
										<th>Imagen</th>
										<th>Modificar</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($productos->result() as $row){ ?>
									<tr>
										<td><?php echo $row->id_producto;  ?></td>
										<td><?php echo $row->marca;  ?></td>
										<td><?php echo $row->modelo;  ?></td>
										<td>
										<?php
										if($row->id_categoria == 1){
											echo 'Bicicleta';
										} elseif($row->id_categoria == 2){
											echo 'Scooter';
										}
										?>
										</td>
										<td><?php echo $row->precio_venta;  ?></td>
										<td><?php echo $row->stock;  ?></td>
										<td><img  id="imagen_view" name="imagen_view" class="img-thumbnail" width="100" height="100" src="<?php  echo base_url($row->imagen); ?>" ></td>
										<td><a href="<?php echo base_url("productos_modifica/$row->id_producto");?>">Modificar</a>
										<br>
										<a href="<?php echo base_url("productos_elimina/$row->id_producto");?>">Eliminar</a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>            
					</div>            
				</div>            
			</div>            

		<?php } ?>

    </section>
    <!-- /.content -->
	</div>
