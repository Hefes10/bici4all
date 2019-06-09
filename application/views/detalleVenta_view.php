<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reportes
        <small>Ventas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

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
                                <th>Venta número</th>
                                <th>Fecha</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($detalles)): ?>
                                    <?php foreach($detalles->result() as $detalle): ?>
                                        <?php if ($detalle->id_venta == $id): ?>
                                        <tr>
                                            <td><?php echo $detalle->id_detalle;?></td>
                                            <td><?php echo $detalle->id_venta;?></td>
                                            <td><?php echo $detalle->fecha;?></td>
                                            <td><?php echo $detalle->marca;?></td>
                                            <td><?php echo $detalle->modelo;?></td>
                                            <td><?php echo $detalle->cantidad;?></td>
                                            <td><?php echo $detalle->precio;?></td>
                                            <?php $totalVenta = $detalle->total_venta;?>
                                        </tr>
                                        <?php endif ?>
                                    <?php endforeach;?>
                            <?php endif ?>
                            <tr>
                                <td>
                                    <?php echo '<b>Total de la venta: </b>$'; ?>
                                    <?php echo $totalVenta; ?>
                                </td>     
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </section>
</div>
    <!-- /.content -->