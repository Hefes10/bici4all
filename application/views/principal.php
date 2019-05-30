<body>
<!-- Main -->
<main id="main">
<!-- carousel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo base_url('assets/img/bici1.jpeg')?>" class="d-block w-100" alt="bici1">
				<div class="overlay carousel-caption">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-6 offset-md-6 text-center text-lg-right">
								<h3>¿POR QUE COMPRAR UNA?</h3>
								<h4>ES ECONOMICA</h4>
								<p class="d-none d-sm-block">
									Ahorra dinero y trámites. No paga patente, seguro, ni combustible!.
								</p>
								<img src="<?php echo base_url('assets/img/economico.png')?>" alt="economico" class="d-none d-md-block" style="max-width: 100%;">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url('assets/img/bici2.jpg');?>" class="d-block w-100" alt="bici2">					<div class="overlay carousel-caption">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-6 offset-md-6 text-center text-lg-right">
								<h3>¿POR QUE COMPRAR UNA?</h3>
								<h4>ES ECOLOGICA</h4>
								<p class="d-none d-sm-block">
								Sin monóxido de carbono, óxido de nitrógeno ni contaminación acústica. La batería es reciclable.
								</p>
								<img src="<?php echo base_url('assets/img/ecologico.png');?>" alt="eclogico" class="d-none d-md-block" style="max-width: 100%;">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url('assets/img/bici3.jpg');?>" class="d-block w-100" alt="bici3">
				<div class="overlay carousel-caption">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-6 offset-md-6 text-center text-lg-right">
								<h3>¿POR QUE COMPRAR UNA?</h3>
								<h4>ES AGIL</h4>
								<p class="d-none d-sm-block">
								Como cualquier bicicleta, podés circular por las ciclovías, veredas o subir al tren. Tiene una autonomía según el modelo entre 20 y 40 km. Llegás sin fatiga o sudor. Ideal para lugares con cuestas.
								</p>
								<img src="<?php echo base_url('assets/img/agil.png');?>" alt="agil" class="d-none d-md-block" style="max-width: 100%;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /carousel -->

	<!-- Cards -->
	<section class="mt-4 bg">
		<?php if (!$productos) { ?>

			<div class="container">
				<div class="well">
					<h1>No hay Productos disponibles</h1>
				</div>	
			</div>

			<?php } else { ?>

			<div class="container-fluid">

				<h2 class="text-center">Productos</h2>

				<hr>

				<div class="row text-center">
					<?php foreach($productos->result() as $row){ ?>
						<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
							<div class="card">
								<img src="<?php echo base_url($row->imagen); ?>" alt="" class="img-responsive img-thumbnail">

								<div class="caption">
									<h4><?php echo trim($row->descripcion); ?></h4>

									<p>
										<?php 
											if ($row->stock < $row->stock_min && $row->stock > 0) {
												echo 'Por debajo del valor minimo: '.$row->stock_min;
											} elseif ($row->stock == 0) {
												echo 'No hay stock';
											}else {
												echo 'Stock: '.$row->stock;
											}
										?>
									</p>

									<p>Precio: $ <?php echo $row->precio_venta; ?> </p>

									<p>
									<?php
										if($row->stock <= 0){
											$btn = array(
												'class' => 'btn btn-danger',
												'value' => 'Comprar',
												'disabled' => '',
												'name' => 'action'
												);
											
											echo form_submit($btn);
											echo form_close();
									
											echo "<a href='#' class='btn btn-default'>Mas Datos</a>";
									?>
									
									<?php
										} else if ($session_data = $this->session->userdata('logged_in')){
											// Envia los datos en forma de formulario para agregar al carrito
											echo form_open('carrito_agrega');
											echo form_hidden('id_producto', $row->id_producto);
											echo form_hidden('descripcion', $row->descripcion);
											echo form_hidden('precio_venta', $row->precio_venta);
											echo form_hidden('stock', $row->stock);
									?>
									<div>
									<?php
											$btn = array(
												'class' => 'btn btn-primary',
												'value' => 'Comprar',
												'name' => 'action'
												);
											
											echo form_submit($btn);
											echo form_close();
											echo "<a href='#' class='btn btn-default'>Más Datos</a>";
									?>
									</div>
									<?php
										
									} else {
											$btn = array(
												'class' => 'btn btn-primary',
												'value' => 'Comprar',
												'data-target' => '#modalLogin',
												'data-toggle' => 'modal',
												'name' => 'action'
												);
											
											echo form_submit($btn);
											echo form_close();
									
											echo "<a href='#' class='btn btn-default'>Mas Datos</a>";
										}
									?>
									
									</p>
	
								</div>
							</div>
						</div>
					<?php } ?>	
				</div>
				<hr>
			</div>
		<?php } ?>
	</section>
	<!-- /Cards -->

</main>
<!-- /main -->
