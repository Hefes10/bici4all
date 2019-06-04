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
                    <table id="example" class="table table-bordered table-hover display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre Cliente</th>
                                <th>Fecha</th>
                                <th>Total</th>
                                <th>Opciones</th>
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
                                                <button type="button" class="btn btn-info btn-view-venta" value="<?php echo $venta->id_venta;?>" data-toggle="modal" data-target="#modal-default"><span class="fa fa-search"></span></button>
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
    <!-- /.content -->
  </div>
  <div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de la venta</h4>
      </div>
      <div class="modal-body">
        asd
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-print"><span class="fa fa-print"> </span>Imprimir</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->