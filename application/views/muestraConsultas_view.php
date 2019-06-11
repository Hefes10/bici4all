<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <?php if (!$consultas) { ?>

        <div class="container">
            <div class="well">
                <h1>No hay Consultas</h1>
            </div>
        </div>

    <?php } else { ?>

        <div class="container" id="tablaProd">
            <div class="well">
                <h1>Todas las Consultas</h1>
            </div>
        </div>

        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <table id="example" class="table table-bordered table-hover display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Consulta</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($consultas->result() as $row){ ?>
                                <tr>
                                    <td><?php echo $row->id_consulta;  ?></td>
                                    <td><?php echo $row->nombre;  ?></td>
                                    <td><?php echo $row->email;  ?></td>
                                    <td><?php echo $row->telefono;  ?></td>
                                    <td><?php echo $row->consulta;  ?></td>
                                    <td><a href="#">Responder</a>|<a href="<?php echo base_url("consulta_elimina/$row->id_consulta");?>">Eliminar</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    <?php } ?>

    </section>
    <!-- /.content -->
  </div>