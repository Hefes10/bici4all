<!-- Main content -->
<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <table id="example" class="table table-striped table-responsive-lg table-bordered table-hover display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total Parcial</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($detalles)): ?>
                                    <?php $i = 1; ?>
                                    <?php foreach($detalles->result() as $detalle): ?>
                                        <?php if ($detalle->id_venta == $id): ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $detalle->marca;?></td>
                                            <td><?php echo $detalle->modelo;?></td>
                                            <td><?php echo $detalle->cantidad;?></td>
                                            <td><?php echo $detalle->precio;?></td>
                                            <td><?php echo $detalle->precio * $detalle->cantidad;?></td>
                                            <?php $fecha = $detalle->fecha;?>
                                            <?php $usuario = $detalle->usuario;?>
                                            <?php $nombre = $detalle->nombre;?>
                                            <?php $apellido = $detalle->apellido;?>
                                            <?php $email = $detalle->email;?>
                                            <?php $totalVenta = $detalle->total_venta;?>
                                            <?php $i = $i + 1;?>
                                        </tr>
                                        <?php endif ?>
                                    <?php endforeach;?>
                            <?php endif ?>
                            <tr>
                                <td>
                                    <?php echo '<b>Fecha: </b>' . $fecha; ?>
                                </td>
                                <td>
                                    <?php echo '<b>Usuario: </b>' . $usuario; ?>
                                </td>
                                <td>
                                    <?php echo '<b>Nombre: </b>' . $nombre; ?>
                                </td>
                                <td>
                                    <?php echo '<b>Apellido: </b>' . $apellido; ?>
                                </td>
                                <td>
                                    <?php echo '<b>Email: </b>' . $email; ?>
                                </td>
                                <td>
                                    <?php echo '<b>Total de la venta: </b>$' . $totalVenta; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </section>