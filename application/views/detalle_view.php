<body>
<!-- Main -->
<main id="main">

	<section id="detalleProducto">
		<div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card">
                        <?php foreach($producto->result() as $row){ ?>
                        <img src="<?php echo base_url($row->imagen); ?>" alt="" class="img-responsive img-thumbnail"> 
                    <?php } ?>  
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                            <div class="caption">
                                <div class="col">
                                    <h4><?php echo trim($row->marca); ?></h4>
                                    <h4><b><?php echo trim($row->modelo); ?></b></h4>
                                </div>
                                <div class="col">
                                    <p>
                                        <h1>
                                            $ <?php echo $row->precio_venta; ?>
                                        </h1>
                                    </p>
                                </div>
                                <p>
                                <div class="col">
                                    <i class="fa fa-credit-card"> Paga en hasta 12 cuotas!</i>
                                </div>
                                <div class="col">
                                    <img class="m-1" src="<?php echo base_url('assets/img/mediosdepago.png'); ?>" alt="tarjetas 1" style="max-width: 50%;">
                                </div>
                                <div class="col">
                                    <h6><a href="<?php echo base_url('comercializacion'); ?>">Más información</a></h6>
                                </div>
                                </p>
                                <div class="col">
                                    <p>
                                        <i class="fa fa-bicycle">
                                        <?php 
                                            if ($row->stock < $row->stock_min && $row->stock > 0) {
                                                echo 'Por debajo del valor minimo: '.$row->stock_min;
                                            } elseif ($row->stock == 0) {
                                                echo 'No hay stock';
                                            }else {
                                                echo $row->stock. ' disponibles';
                                            }
                                        ?>
                                        </i>
                                    </p>
                                </div>
                                <div class="col">
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
                                
                                    ?>
                                    
                                    <?php
                                        } else if ($session_data = $this->session->userdata('logged_in')){
                                            // Envia los datos en forma de formulario para agregar al carrito
                                            echo form_open('carrito_agrega');
                                            echo form_hidden('id_producto', $row->id_producto);
                                            echo form_hidden('modelo', $row->marca . ' - ' . $row->modelo);
                                            echo form_hidden('precio_venta', $row->precio_venta);
                                            echo form_hidden('stock', $row->stock);
                                    ?>
                                    <div>
                                    <?php
                                            $btn = array(
                                                'class' => 'btn btn-primary btn-block',
                                                'value' => 'Comprar',
                                                'name' => 'action'
                                                );
                                            
                                            echo form_submit($btn);
                                            echo form_close();
                                    ?>
                                    </div>
                                    <?php
                                        
                                    } else {
                                            $btn = array(
                                                'class' => 'btn btn-primary btn-block',
                                                'value' => 'Comprar',
                                                'data-target' => '#modalLogin',
                                                'data-toggle' => 'modal',
                                                'name' => 'action'
                                                );
                                            
                                            echo form_submit($btn);
                                            echo form_close();
                                    
                                        }
                                        ?>
                                    
                                    </p>
                                </div>

                            </div>
                        </div>

                    <div class="card">
                            <div class="caption">
                                <div class="mx-5">
                                    <h4>Caracteristicas:</h4>    
                                    <?php echo trim($row->descripcion); ?>
                                </div>
                            </div>
                        </div>
                </div>
                </div>


        </div>
	</section>

</main>
<!-- /main -->