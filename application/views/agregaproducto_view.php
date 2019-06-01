<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
		<div class="container">
		<div class="col-sm-10 col-md-10">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Agregar Producto
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Agregar Producto</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="container">
			<div class="well col-lg-8">
				<h2>Cargar nuevo producto</h2>
				<h6> <b>Acepta imagenes gif, jpg, jpeg, png</b></h6>
				<h6> <b>Tamaño maximo de la imagen 2MB</b></h6>	
			</div>
			
			<div class="row">
				<div class="col-lg-8">

					<?php echo validation_errors(); ?>
					<!-- Genero el formulario para cargar un producto -->

					<div class="well bs-component form-horizontal">
						<?php echo form_open_multipart('verifico_nuevoproducto', 
											['class' => 'form-group', 'role' => 'form', 'id' => 'form_registro']); ?>
						<fieldset>
							<div class="form-group">
								<label class="col-lg-2 control-label">Marca</label>
								<div class="col-lg-10">
									<?php echo form_input(['name' => 'marca', 
															'id' => 'marca', 
															'class' => 'form-control',
															'placeholder' => 'Marca', 
															'autofocus'=>'autofocus',
															'value'=>set_value('marca')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Modelo</label>
								<div class="col-lg-10">
									<?php echo form_input(['name' => 'modelo', 
															'id' => 'modelo', 
															'class' => 'form-control',
															'placeholder' => 'Modelo', 
															'autofocus'=>'autofocus',
															'value'=>set_value('modelo')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Descripción</label>
								<div class="col-lg-10">
									<?php echo form_input(['name' => 'descripcion', 
															'id' => 'descripcion', 
															'class' => 'form-control',
															'placeholder' => 'Descripcion', 
															'autofocus'=>'autofocus',
															'value'=>set_value('descripcion')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Categoría</label>
								<div class="col-lg-10">
									<?php echo form_input(['name' => 'id_categoria', 
															'id' => 'id_categoria', 
															'class' => 'form-control',
															'placeholder' => '1- Bicicleta - 2- Scooter', 
															'value'=>set_value('id_categoria')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Precio Costo</label>
								<div class="col-lg-10">
									<?php echo form_input(['name' => 'precio_costo', 
															'id' => 'precio_costo', 
															'class' => 'form-control',
															'placeholder' => '$0.00', 
															'value'=>set_value('precio_costo')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Precio Venta</label>
								<div class="col-lg-10">
									<?php echo form_input(['name' => 'precio_venta', 
															'id' => 'precio_venta', 
															'class' => 'form-control',
															'placeholder' => '$0.00',
															'value'=>set_value('precio_venta')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Stock</label>
								<div class="col-lg-10">
									<?php echo form_input(['name' => 'stock', 
															'id' => 'stock', 
															'class' => 'form-control',
															'placeholder' => '0',
															'value'=>set_value('stock')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Stock Minimo</label>
								<div class="col-lg-10">
									<?php echo form_input(['name' => 'stock_min', 
															'id' => 'stock_min', 
															'class' => 'form-control',
															'placeholder' => '0',
															'value'=>set_value('stock_min')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Imagen</label>
								<div class="col-lg-10">
									<?php echo form_input(['type' => 'file',
															'name' => 'filename', 
															'id' => 'filename', 
															'class' => 'form-control']); ?> 

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
