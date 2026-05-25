<?php

// Consultar convocatorias activas para el selector superior
$convocatoriasActivas = ControladorConvocatorias::ctrListarConvocatoriasActivas();

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="font-weight-bold text-light"><i class="fas fa-pencil-alt mr-2 text-success"></i>Inscripciones de Documentos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="inicio" class="text-success"><i class="fas fa-home"></i> Inicio</a></li>
                    <li class="breadcrumb-item active text-muted">Inscripciones 2</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content animate__animated animate__fadeIn">
    <div class="container-fluid">

        <!-- ========================================================================================================
        GUÍA DE USO RÁPIDA
        ========================================================================================================= -->
        <div class="alert alert-dismissible bg-dark border border-secondary text-light mb-4 shadow-sm" style="border-left: 5px solid #198754 !important;">
            <button type="button" class="close text-white" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5 class="font-weight-bold text-success"><i class="icon fas fa-info-circle mr-2"></i>Postulación Simplificada - Pantalla Única</h5>
            <p class="mb-0" style="font-size: 0.95rem;">
                Selecciona una convocatoria usando los botones de abajo. Haz clic en el <strong>icono gris ( <i class="fas fa-exclamation-triangle"></i> )</strong> de cualquier columna para abrir el modal y subir tu documento.
                El estado se actualizará en tiempo real: <span class="badge badge-warning text-dark">! Pendiente</span>, <span class="badge badge-success">✔ Aprobado</span> o <span class="badge badge-danger">✘ Rechazado</span>.
            </p>
        </div>

        <!-- ========================================================================================================
        SELECTOR DE CONVOCATORIAS DISPONIBLES
        ========================================================================================================= -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card bg-dark text-white border border-secondary shadow-sm">
                    <div class="card-body p-3">
                        <label class="text-muted text-uppercase font-weight-bold mb-3 d-block" style="font-size: 0.8rem; letter-spacing: 1px;">Seleccione Convocatoria:</label>
                        <div class="d-flex flex-wrap" id="grupo-botores-convocatoria">
                            <?php if (count($convocatoriasActivas) === 0): ?>
                                <p class="text-muted font-italic mb-0">No hay convocatorias activas disponibles en este momento.</p>
                            <?php else: ?>
                                <?php foreach ($convocatoriasActivas as $key => $conv): ?>
                                    <button type="button" 
                                            class="btn btn-outline-success font-weight-bold btn-convocatoria-sel m-1 <?php echo $key === 0 ? 'active' : ''; ?>"
                                            data-id-convocatoria="<?php echo $conv["id"]; ?>"
                                            data-apoyo="<?php echo $conv["descripcion_apoyo"]; ?>"
                                            style="border-radius: 4px; padding: 10px 16px; transition: all 0.3s ease;">
                                        <i class="<?php echo $conv["apoyo_icono"] ? $conv["apoyo_icono"] : "fas fa-hand-holding-heart"; ?> mr-2"></i>
                                        <?php echo $conv["descripcion_apoyo"]; ?>
                                    </button>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================================================================================================
        TABLA PRINCIPAL MOCKUP PREMIUM
        ========================================================================================================= -->
        <div class="card bg-dark text-white border border-secondary shadow-lg">
            <div class="card-body p-4">
                
                <div class="table-responsive">
                    <table id="tblInscripciones2" 
                           class="table table-bordered table-striped dt-responsive nowrap" 
                           style="width:100%; border-color: #4f5962 !important;"
                           data-documento="<?php echo $_SESSION["documento"]; ?>"
                           data-nombre="<?php echo $_SESSION["nombres"] . ' ' . $_SESSION["apellidos"]; ?>">
                        
                        <thead style="background-color: #198754; color: white;">
                            <tr id="headers-tblInscripciones2">
                                <th>T.I/C.C</th>
                                <th>Nombres</th>
                                <!-- Se inyectan dinámicamente mediante JS -->
                                <th>P</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr id="row-tblInscripciones2">
                                <td><?php echo $_SESSION["documento"]; ?></td>
                                <td class="font-weight-bold text-uppercase"><?php echo $_SESSION["nombres"] . ' ' . $_SESSION["apellidos"]; ?></td>
                                <!-- Se inyectan dinámicamente mediante JS -->
                                <td class="text-center">--</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- ========================================================================================================
VENTANA MODAL - CARGA / ACCIÓN DE DOCUMENTOS
========================================================================================================= -->
<div class="modal fade animate__animated animate__fadeIn" id="modal-subirDocumento2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="backdrop-filter: blur(4px);">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark text-white border border-secondary shadow-lg">
            
            <div class="modal-header border-bottom border-secondary" style="background-color: #2b3035;">
                <h5 class="modal-title font-weight-bold" id="modalLabel">
                    <i class="fas fa-file-pdf text-success mr-2"></i>Gestión de Requisito
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body p-4" style="background-color: #202427;">
                <form id="form-subirDoc2" enctype="multipart/form-data">
                    
                    <!-- Campos Ocultos de metadatos -->
                    <input type="hidden" id="modal-nombre-doc">
                    <input type="hidden" id="modal-id-doc">
                    <input type="hidden" id="modal-ruta-doc">
                    
                    <div class="form-group mb-3">
                        <label class="text-muted text-uppercase font-weight-bold mb-1 d-block" style="font-size: 0.75rem;">Nombre del Requisito:</label>
                        <h5 id="modal-txt-nombre-doc" class="text-white font-weight-bold">Documento Requerido</h5>
                    </div>

                    <div class="form-group mb-4 d-flex justify-content-between">
                        <span class="badge badge-danger font-weight-bold px-3 py-2 shadow-sm" id="modal-badge-obligatorio" style="border-radius: 4px;">OBLIGATORIO</span>
                        <span class="badge badge-dark border border-secondary font-weight-bold px-3 py-2 text-success shadow-sm" id="modal-badge-puntaje" style="border-radius: 4px;">Puntaje Máximo</span>
                    </div>

                    <!-- Observaciones de rechazo del gestor (si aplica) -->
                    <div class="alert alert-danger border border-danger p-3 mb-4 d-none" id="modal-alert-rechazo" style="border-left: 5px solid #dc3545 !important;">
                        <div class="d-flex align-items-center mb-1">
                            <i class="fas fa-times-circle fa-lg mr-2 text-danger"></i>
                            <strong class="text-white">Corrección Requerida por Gestor:</strong>
                        </div>
                        <p class="text-white font-italic mb-0" id="modal-txt-obs" style="font-size: 0.9rem;">"El archivo no coincide..."</p>
                    </div>

                    <!-- Estado Actual en Modal -->
                    <div class="alert p-3 mb-4 text-center border font-weight-bold shadow-sm" id="modal-alert-estado" style="font-size: 0.95rem; border-radius: 6px;">
                        Estado actual
                    </div>

                    <!-- Zona interactiva de subida -->
                    <div class="form-group mb-0" id="modal-div-subida">
                        <label class="font-weight-bold mb-2">Seleccionar archivo PDF:</label>
                        <div class="dropzone-mock">
                            <i class="fas fa-cloud-upload-alt fa-3x text-success mb-3"></i>
                            <span class="d-block text-white font-weight-bold" style="font-size: 0.95rem;">Buscar PDF en tu dispositivo</span>
                            <small class="text-muted d-block mt-1">Solo documentos en formato PDF (.pdf)</small>
                            <small class="text-muted d-block">Tamaño máximo admitido: 5 MB</small>
                            <input type="file" id="file-uploader2" accept="application/pdf">
                        </div>
                        
                        <!-- Barra de progreso real -->
                        <div class="progress progress-xxs mt-3 d-none" id="modal-progress-container" style="height: 8px; border-radius: 4px;">
                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" id="modal-progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                        </div>
                    </div>

                    <!-- Acciones del archivo cargado (Ver/Eliminar) -->
                    <div class="form-group mb-0 d-none" id="modal-div-acciones">
                        <label class="font-weight-bold mb-2 d-block text-muted text-uppercase" style="font-size: 0.75rem;">Acciones Disponibles:</label>
                        <div class="btn-group w-100 shadow-sm">
                            <button type="button" class="btn btn-info font-weight-bold py-2" id="modal-btn-ver">
                                <i class="fas fa-eye mr-2"></i> Ver PDF Subido
                            </button>
                            <button type="button" class="btn btn-danger font-weight-bold py-2" id="modal-btn-eliminar">
                                <i class="fas fa-trash-alt mr-2"></i> Eliminar Documento
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            
            <div class="modal-footer border-top border-secondary" style="background-color: #2b3035;">
                <button type="button" class="btn btn-outline-light font-weight-bold px-4" data-dismiss="modal">Cerrar</button>
            </div>
            
        </div>
    </div>
</div>

<!-- ========================================================================================================
ESTILOS ADICIONALES LOCALES PARA LA MAQUETACIÓN PREMIUM MOCKUP
========================================================================================================= -->
<style>
    .btn-convocatoria-sel {
        border-color: #4f5962;
        color: #adb5bd;
        background-color: #2b3035;
    }
    .btn-convocatoria-sel:hover {
        border-color: #198754;
        color: #fff;
        background-color: #1f2326;
    }
    .btn-convocatoria-sel.active {
        border-color: #198754;
        background-color: #198754 !important;
        color: #fff !important;
        box-shadow: 0 4px 10px rgba(25, 135, 84, 0.3) !important;
    }

    .dropzone-mock {
        border: 2px dashed #6c757d;
        border-radius: 8px;
        background-color: #2b3035;
        padding: 24px 20px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .dropzone-mock:hover {
        border-color: #198754;
        background-color: #343a40;
        box-shadow: 0 0 10px rgba(25, 135, 84, 0.2);
    }
    
    .dropzone-mock input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
        z-index: 10;
    }

    /* Estilo premium para los headers y bordes de la tabla */
    #tblInscripciones2 {
        border-collapse: collapse !important;
    }
    #tblInscripciones2 th {
        border: 1px solid #4f5962 !important;
        vertical-align: middle;
        text-align: center;
    }
    #tblInscripciones2 td {
        border: 1px solid #4f5962 !important;
        vertical-align: middle;
    }

    .btn-requisito-modal {
        transition: all 0.2s ease;
    }
    .btn-requisito-modal:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 10px rgba(0,0,0,0.3) !important;
    }
</style>
