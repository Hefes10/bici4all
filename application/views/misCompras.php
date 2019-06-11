    <!-- Main content -->
    <div class="container">
    <section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <table id="example" class="table table-striped table-responsive-lg table-bordered table-hover display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Fecha</th>
                                <th>Total</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($compras)): ?>
                                <?php foreach($compras->result() as $compra): ?>
                                    <?php if ($compra->id_usuario == $id): ?>
                                        <tr>
                                            <td><?php echo $compra->id_venta;?></td>
                                            <td><?php echo $compra->fecha;?></td>
                                            <td><?php echo $compra->total_venta;?></td>
                                            <td>
                                            <a href="<?php echo base_url("misDetallesCompras/$compra->id_venta"); ?>" class='btn btn-info'>Ver más</a>
                                            </td>
                                        </tr>
                                    <?php endif ?>
                                <?php endforeach;?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </section>
    </div>
    <!-- /.content -->