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

			<div class="container pt-3">
				<div class="row">
					<div class="col-12">
						<div class="search-box">
							<input class="search-txt" type="text" name="" placeholder="¿Qué estás buscando?">
							<a href="#" class="search-btn">
							<i class="fa fa-search"></i>
							</a>
						</div>       
					</div>
				</div>     
			</div>

				<hr>

				<div class="row text-center">
					<?php foreach($productos->result() as $row){ ?>
						<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
							<div class="card">
								<img src="<?php echo base_url($row->imagen); ?>" alt="" class="img-responsive img-thumbnail">

								<div class="caption">
									<h4><b>$ <?php echo trim($row->precio_venta); ?></b></h4>

									<p>

										<a href="<?php echo base_url("verDetalle/$row->id_producto"); ?>" class='btn btn-info'>Ver más</a>
									
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
