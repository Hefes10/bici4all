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
		<?php if (!$productos) { ?>

			<div class="container">
				<div class="well">
					<h1>No hay Eliminados</h1>
				</div>	
			</div>

		<?php } else { ?>

		<div class="container">
			<div class="well">
				<h1>Todos los Eliminados</h1>
			</div>	

			<table id="example" class="table table-bordered table-hover display nowrap" style="width:100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Descripcion</th>
						<th>Categoria</th>
						<th>Precio Venta</th>
						<th>Stock</th>
						<th>Modificar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($productos->result() as $row){ ?>
					<tr>
						<td><?php echo $row->id_producto;  ?></td>
						<td><?php echo $row->marca;  ?></td>
						<td><?php echo $row->modelo;  ?></td>
						<td><?php echo $row->descripcion;  ?></td>
						<td><?php echo $row->id_categoria;  ?></td>
						<td><?php echo $row->precio_venta;  ?></td>
						<td><?php echo $row->stock;  ?></td>
						<td><a href="<?php echo base_url("productos_modifica/$row->id_producto");?>">Modificar</a>|<a href="<?php echo base_url("productos_activa/$row->id_producto");?>">Activar</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>	            
		</div>

		<?php } ?>

    </section>
    <!-- /.content -->
  </div>

