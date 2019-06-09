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
                                <th>Nombre Cliente</th>
                                <th>Fecha</th>
                                <th>Total</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($ventas)): ?>
                                <?php foreach($ventas->result() as $venta): ?>
                                    <tr>
                                        <td><?php echo $venta->id_venta;?></td>
                                        <td><?php echo $venta->nombre;?></td>
                                        <td><?php echo $venta->fecha;?></td>
                                        <td><?php echo $venta->total_venta;?></td>
                                        <td>
                                        <a href="<?php echo base_url("verDetalleVenta/$venta->id_venta"); ?>" class='btn btn-info'>Ver más</a>
                                        </td>
                                    </tr>
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