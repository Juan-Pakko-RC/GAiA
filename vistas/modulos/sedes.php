 <section class="content-header">
   <div class="container-fluid">
     <div class="row mb-2 align-items-center">
       <div class="col-sm-6">
         <h1 class="m-0 text-uppercase font-weight-bold">SEDES</h1>
       </div>
       <div class="col-sm-6 text-right">
         <button class="btn btn-success" data-toggle="modal" data-target="#modalAgregarSede">
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
                // var_dump($respuesta);
                foreach ($sedes as $sede) {
                  echo "<tr>";
                  echo "<td>" . $sede['id_sedes'] . "</td>";
                  echo "<td>" . $sede['descripcion_sede'] . "</td>";
                  echo "<td>" . $sede['direccion_sede'] . "</td>";
                  echo "<td>" . $sede['nombres'] . "</td>";
                  echo "<td>";
                  if ($sede['estado'] == 'activo') {
                    echo "<button class='btn btn-xs btn-success'>activo</button>";
                  } else {
                    echo "<button class='btn btn-xs btn-danger'>inactivo</button>";
                  };
                  echo "</td>";
                  echo "<td>";
                  echo '<div class="btn-group">
                            <button class="btn btn-sm btn-outline-light" data-toggle="modal" data-target="#modal-editarUsuario"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-light" data-toggle="modal" data-target="#modal-consultarUsuario"><i class="fas fa-eye"></i></button>
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