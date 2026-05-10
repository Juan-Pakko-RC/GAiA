 <section class="content-header">
   <div class="container-fluid">
     <div class="row mb-2 align-items-center">
       <div class="col-sm-6">
         <h1 class="m-0 text-uppercase font-weight-bold">SEDES</h1>
       </div>
       <div class="col-sm-6 text-right">
         <button class="btn btn-success" data-toggle="modal" data-target="#modal-agregarSede">
           Agregar Sede
         </button>
       </div>
     </div>
   </div>
 </section>

 <!-- Main content -->
 <section class="content">
   <div class="container-fluid">
     <div class="card border-0 shadow-sm">
       <div class="card-body" style="min-height: 500px;">

         <!-- DataTable -->
         <div class="table-responsive shadow-sm mt-3">
           <table id="tblSedes" class="table table-bordered table-striped text-center align-middle mb-0" width="100%">
             <thead class="bg-success text-white">
               <tr>
                 <th style="width: 60px">ID</th>
                 <th>Descripción</th>
                 <th>Dirección</th>
                 <th>Estado</th>
                 <th>Acciones</th>
               </tr>
             </thead>
             <tbody>
               <?php
                $respuesta = ControladorSedes::ctrListarSedes();
                //var_dump($respuesta);
                foreach ($respuesta as $sede) {
                  echo "<tr>";
                  echo "<td>" . $sede['id_sedes'] . "</td>";
                  echo "<td>" . $sede['descripcion_sede'] . "</td>";
                  echo "<td>" . $sede['direccion_sede'] . "</td>";
                  echo "<td>";
                  if ($sede) {
                    echo "<button class='btn btn-xs btn-success'>activo</button>";
                  } else {
                    echo "<button class='btn btn-xs btn-danger'>inactivo</button>";
                  };
                  echo "</td>";
                  echo "<td>";
                  echo '<div class="btn-group">
                            <button class="btn btn-sm btn-outline-light" data-toggle="modal" data-target="#modal-editarSede"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-light" data-toggle="modal" data-target="#modal-consultarSede"><i class="fas fa-eye"></i></button>
                          </div>
                        </td>';

                  echo "</tr>";
                };

                ?>
             </tbody>
           </table>
         </div>

       </div>
     </div>
   </div>
 </section>

 <!-- ********************************************************************************************************
AGREGAR SEDE   -->

 <div class="modal fade" id="modal-agregarSede">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title">Agregar sede</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
        <form action="" method="post">

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-home"></i></span>
            </div>
            <input type="text" class="form-control" name="nuevoNombreSede" placeholder="Nombre de la sede" required>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
            </div>
            <input type="text" class="form-control" name="nuevaDireccionSede" placeholder="Dirección de la sede" required>
          </div>
        </div>
       <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
       </div>
       <?php
        $agregarSede = new ControladorSedes();
        $agregarSede -> ctrAgregarSede();
        ?>
       </form>
     </div>
     <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
 </div>
 <!-- /.modal -->