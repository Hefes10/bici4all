<body>
<!-- Main -->
<main id="main">
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('principal');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">> Ver detalle</li>
      </ol>
    </section>

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
                                <h4><b><?php echo trim($row->descripcion); ?></b></h4>

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

                                <p><?php echo $row->descripcion; ?> </p>

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
                                
                                        //echo "<a href='#' class='btn btn-default'>Mas Datos</a>";
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
                                        //echo "<a href='#' class='btn btn-default'>Más Datos</a>";
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
                                
                                    }
                                    ?>
                                    <a href="<?php echo base_url("verDetalle/$row->id_producto"); ?>" class='btn btn-primary'>Ver</a>
                                
                                </p>

                            </div>
                        </div>

                    <div class="card">
                            <div class="caption">
                                <h4><b>$ <?php echo trim($row->precio_venta); ?></b></h4>

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

                                <p><?php echo $row->descripcion; ?> </p>

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
                                
                                        //echo "<a href='#' class='btn btn-default'>Mas Datos</a>";
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
                                        //echo "<a href='#' class='btn btn-default'>Más Datos</a>";
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
                                
                                    }
                                    ?>
                                    <a href="<?php echo base_url("verDetalle/$row->id_producto"); ?>" class='btn btn-primary'>Ver</a>
                                
                                </p>

                            </div>
                        </div>
                </div>
                </div>


        </div>
	</section>

</main>
<!-- /main -->