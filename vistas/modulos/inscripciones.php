<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="font-weight-bold text-light"><i class="fas fa-pencil-alt mr-2 text-success"></i>Inscripciones a Convocatorias</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="inicio" class="text-success"><i class="fas fa-home"></i> Inicio</a></li>
                    <li class="breadcrumb-item active text-muted">Inscripciones</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- ========================================================================================================
        KPI WIDGETS / TARJETAS DE INDICADORES RÁPIDAS
        ========================================================================================================= -->
        <div class="row">
            <!-- Convocatorias Abiertas -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box bg-dark shadow-sm border border-secondary">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bullhorn"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text text-muted font-weight-bold text-uppercase" style="font-size: 0.75rem;">Convocatorias Abiertas</span>
                        <span class="info-box-number h4 font-weight-bold mb-0 text-white" id="kpi-abiertas">4</span>
                    </div>
                </div>
            </div>
            
            <!-- Mis Postulaciones -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box bg-dark shadow-sm border border-secondary">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file-signature"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text text-muted font-weight-bold text-uppercase" style="font-size: 0.75rem;">Mis Postulaciones</span>
                        <span class="info-box-number h4 font-weight-bold mb-0 text-white" id="kpi-postulaciones">1</span>
                    </div>
                </div>
            </div>

            <!-- Correcciones Requeridas -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box bg-dark shadow-sm border border-secondary">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-exclamation-triangle text-dark"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text text-muted font-weight-bold text-uppercase" style="font-size: 0.75rem;">Acciones Requeridas</span>
                        <span class="info-box-number h4 font-weight-bold mb-0 text-warning" id="kpi-correcciones">1</span>
                    </div>
                </div>
            </div>

            <!-- Estado de Admisión -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box bg-dark shadow-sm border border-secondary">
                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-user-graduate"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text text-muted font-weight-bold text-uppercase" style="font-size: 0.75rem;">Estado de Aprendiz</span>
                        <span class="info-box-number h4 font-weight-bold mb-0 text-success" id="kpi-estado">ACTIVO</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================================================================================================
        PANEL PRINCIPAL CON TABS (LISTADO / HISTORIAL)
        ========================================================================================================= -->
        <div id="panel-listados" class="card card-dark card-tabs bg-dark border border-secondary shadow">
            <div class="card-header p-0 pt-1 border-bottom-0" style="background-color: #343a40;">
                <ul class="nav nav-tabs" id="tabInscripciones" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold text-uppercase" id="tab-convocatorias-tab" data-toggle="pill" href="#tab-convocatorias" role="tab" aria-controls="tab-convocatorias" aria-selected="true" style="padding: 12px 20px;">
                            <i class="fas fa-bullhorn mr-2 text-success"></i> Convocatorias Disponibles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-uppercase" id="tab-postulaciones-tab" data-toggle="pill" href="#tab-postulaciones" role="tab" aria-controls="tab-postulaciones" aria-selected="false" style="padding: 12px 20px;">
                            <i class="fas fa-history mr-2 text-info"></i> Mis Postulaciones 
                            <span class="badge badge-warning text-dark ml-2 px-2 py-1 font-weight-bold" id="badge-contador-postulaciones" style="border-radius: 10px;">1</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="card-body" style="background-color: #2b3035;">
                <div class="tab-content" id="tabInscripcionesContent">
                    
                    <!-- TAB 1: CONVOCATORIAS DISPONIBLES -->
                    <div class="tab-pane fade show active" id="tab-convocatorias" role="tabpanel" aria-labelledby="tab-convocatorias-tab">
                        
                        <!-- Mensaje de bienvenida / guía rápida -->
                        <div class="alert alert-dismissible bg-dark border border-secondary text-light mb-4 shadow-sm" style="border-left: 5px solid #198754 !important;">
                            <button type="button" class="close text-white" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5 class="font-weight-bold text-success"><i class="icon fas fa-info-circle mr-2"></i>¿Cómo funciona tu proceso de postulación?</h5>
                            <p class="mb-0" style="font-size: 0.95rem;">
                                Selecciona una de las convocatorias abiertas listadas a continuación. Presiona el botón <strong>"Iniciar Postulación"</strong> para conocer los requisitos detallados y cargar los archivos en formato PDF o imagen. Tu solicitud será evaluada en base al baremo y requisitos establecidos.
                            </p>
                        </div>

                        <!-- Grid de Convocatorias -->
                        <div class="row" id="contenedor-grid-convocatorias">
                            
                            <!-- TARJETA 1: APOYO DE ALIMENTACIÓN -->
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card bg-dark text-white border border-secondary h-100 shadow-sm card-convocatoria" style="border-left: 5px solid #28a745 !important; transition: transform 0.2s ease; cursor: pointer;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <div class="d-flex align-items-center">
                                                <span class="bg-success text-white p-3 rounded mr-3 shadow-sm"><i class="fas fa-utensils fa-lg"></i></span>
                                                <div>
                                                    <h5 class="card-title font-weight-bold mb-0 text-white" style="line-height: 1.2;">Apoyo de Alimentación</h5>
                                                    <small class="text-success font-weight-bold">CONVOCATORIA ABIERTA</small>
                                                </div>
                                            </div>
                                            <span class="badge badge-success px-2 py-1 shadow-sm font-weight-bold" style="font-size: 0.75rem;">ACTIVA</span>
                                        </div>
                                        
                                        <p class="card-text text-muted mb-4" style="font-size: 0.9rem; line-height: 1.5; height: 55px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            Dirigido a aprendices en condiciones socioeconómicas vulnerables para subsidiar su almuerzo diario durante la jornada académica formativa.
                                        </p>

                                        <div class="border-top border-secondary pt-3 mt-3" style="font-size: 0.85rem;">
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-muted"><i class="far fa-calendar-alt mr-2"></i>Período:</span>
                                                <span class="font-weight-bold text-white">01/Jun/2026 - 15/Jun/2026</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-muted"><i class="fas fa-users mr-2"></i>Cupos Disponibles:</span>
                                                <span class="font-weight-bold text-success">150 personas</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <span class="text-muted"><i class="fas fa-clipboard-check mr-2"></i>Requisitos Clave:</span>
                                                <span class="badge badge-warning text-dark font-weight-bold px-2">3 Documentos</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card-footer bg-transparent border-top border-secondary p-3">
                                        <button class="btn btn-success btn-block font-weight-bold btn-iniciar-inscripcion" 
                                                data-apoyo="Apoyo de Alimentación" 
                                                data-requisitos='["Fotocopia del Documento de Identidad (150%)", "Certificado de Calificaciones (Promedio > 4.0)", "Certificado Sisbén IV / Carta de Población Vulnerable"]'
                                                data-fechas="01/Jun/2026 - 15/Jun/2026"
                                                data-cupos="150"
                                                data-is-nuevo="true">
                                            <i class="fas fa-file-signature mr-2"></i> Iniciar Postulación
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- TARJETA 2: APOYO DE TRANSPORTE -->
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card bg-dark text-white border border-secondary h-100 shadow-sm card-convocatoria" style="border-left: 5px solid #007bff !important; transition: transform 0.2s ease; cursor: pointer;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <div class="d-flex align-items-center">
                                                <span class="bg-primary text-white p-3 rounded mr-3 shadow-sm"><i class="fas fa-bus fa-lg"></i></span>
                                                <div>
                                                    <h5 class="card-title font-weight-bold mb-0 text-white" style="line-height: 1.2;">Apoyo de Transporte</h5>
                                                    <small class="text-primary font-weight-bold">CONVOCATORIA ABIERTA</small>
                                                </div>
                                            </div>
                                            <span class="badge badge-primary px-2 py-1 shadow-sm font-weight-bold" style="font-size: 0.75rem;">REQUERIDO</span>
                                        </div>
                                        
                                        <p class="card-text text-muted mb-4" style="font-size: 0.9rem; line-height: 1.5; height: 55px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            Subsidio mensual para sufragar los gastos de traslado y pasajes urbanos del aprendiz desde su residencia hasta el Centro de Formación.
                                        </p>

                                        <div class="border-top border-secondary pt-3 mt-3" style="font-size: 0.85rem;">
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-muted"><i class="far fa-calendar-alt mr-2"></i>Período:</span>
                                                <span class="font-weight-bold text-white">25/May/2026 - 10/Jun/2026</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-muted"><i class="fas fa-users mr-2"></i>Cupos Disponibles:</span>
                                                <span class="font-weight-bold text-primary">80 personas</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <span class="text-muted"><i class="fas fa-clipboard-check mr-2"></i>Requisitos Clave:</span>
                                                <span class="badge badge-warning text-dark font-weight-bold px-2">4 Documentos</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card-footer bg-transparent border-top border-secondary p-3">
                                        <!-- Esta ya la postulamos (para el mockup interactivo), mostraremos que requiere corrección si hace clic, o podemos usarla como postulación en curso -->
                                        <button class="btn btn-warning btn-block font-weight-bold text-dark btn-iniciar-inscripcion" 
                                                data-apoyo="Apoyo de Transporte" 
                                                data-requisitos='["Copia del Documento de Identidad (C.C)", "Certificado Sisbén IV actualizado", "Recibo de Servicios Públicos Reciente (Estrato)", "Formato de Ficha Socioeconómica Firmada"]'
                                                data-fechas="25/May/2026 - 10/Jun/2026"
                                                data-cupos="80"
                                                data-is-nuevo="false">
                                            <i class="fas fa-exclamation-triangle mr-2"></i> Corregir Postulación
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- TARJETA 3: APOYO DE SOSTENIMIENTO DUAL -->
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card bg-dark text-white border border-secondary h-100 shadow-sm card-convocatoria" style="border-left: 5px solid #17a2b8 !important; transition: transform 0.2s ease; cursor: pointer;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <div class="d-flex align-items-center">
                                                <span class="bg-info text-white p-3 rounded mr-3 shadow-sm"><i class="fas fa-hand-holding-heart fa-lg"></i></span>
                                                <div>
                                                    <h5 class="card-title font-weight-bold mb-0 text-white" style="line-height: 1.2;">Apoyo Sostenimiento</h5>
                                                    <small class="text-info font-weight-bold">CONVOCATORIA ABIERTA</small>
                                                </div>
                                            </div>
                                            <span class="badge badge-info px-2 py-1 shadow-sm font-weight-bold" style="font-size: 0.75rem;">DUAL</span>
                                        </div>
                                        
                                        <p class="card-text text-muted mb-4" style="font-size: 0.9rem; line-height: 1.5; height: 55px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            Ayuda económica mensual para aprendices con formación dual, contribuyendo a solventar gastos esenciales durante su etapa lectiva o productiva.
                                        </p>

                                        <div class="border-top border-secondary pt-3 mt-3" style="font-size: 0.85rem;">
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-muted"><i class="far fa-calendar-alt mr-2"></i>Período:</span>
                                                <span class="font-weight-bold text-white">05/Jun/2026 - 20/Jun/2026</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-muted"><i class="fas fa-users mr-2"></i>Cupos Disponibles:</span>
                                                <span class="font-weight-bold text-info">40 personas</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <span class="text-muted"><i class="fas fa-clipboard-check mr-2"></i>Requisitos Clave:</span>
                                                <span class="badge badge-warning text-dark font-weight-bold px-2">3 Documentos</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card-footer bg-transparent border-top border-secondary p-3">
                                        <button class="btn btn-info btn-block font-weight-bold text-white btn-iniciar-inscripcion" 
                                                data-apoyo="Apoyo Sostenimiento" 
                                                data-requisitos='["Documento Identidad", "Certificado de Matrícula y Horario Dual", "Certificado de Cuenta Bancaria Activa"]'
                                                data-fechas="05/Jun/2026 - 20/Jun/2026"
                                                data-cupos="40"
                                                data-is-nuevo="true">
                                            <i class="fas fa-file-signature mr-2"></i> Iniciar Postulación
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- TAB 2: MIS POSTULACIONES -->
                    <div class="tab-pane fade" id="tab-postulaciones" role="tabpanel" aria-labelledby="tab-postulaciones-tab">
                        
                        <div class="table-responsive">
                            <table id="tblMisPostulaciones" class="table table-dark table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead style="background-color: #198754; color: white;">
                                    <tr>
                                        <th style="width: 5%">#</th>
                                        <th style="width: 25%">Apoyo Solicitado</th>
                                        <th style="width: 15%">Fecha Registro</th>
                                        <th style="width: 10%">Puntaje</th>
                                        <th style="width: 15%">Estado Actual</th>
                                        <th style="width: 20%">Observaciones</th>
                                        <th style="width: 10%">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="fila-postulacion-transporte">
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="text-primary mr-2" style="font-size: 1.1rem;"><i class="fas fa-bus"></i></span>
                                                <span class="font-weight-bold">Apoyo de Transporte</span>
                                            </div>
                                        </td>
                                        <td>22/May/2026</td>
                                        <td class="font-weight-bold">0.00 pts</td>
                                        <td>
                                            <span class="badge badge-warning text-dark font-weight-bold px-2 py-1" style="font-size: 0.85em; border-radius: 4px;">
                                                <i class="fas fa-exclamation-triangle mr-1"></i> Corrección Requerida
                                            </span>
                                        </td>
                                        <td class="text-warning font-italic" style="font-size: 0.88rem;">
                                            "El recibo de servicio público está borroso o ilegible. Favor subir copia nítida."
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-outline-warning btn-editar-postulacion-tabla" title="Subir / Corregir Documentos">
                                                <i class="fas fa-upload mr-1"></i> Corregir
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- ========================================================================================================
        PANEL DE CARGA DE DOCUMENTOS (DETALLES + WIZARD DE ARCHIVOS)
        ========================================================================================================= -->
        <div id="panel-carga-documentos" class="card bg-dark border border-secondary shadow mb-4 d-none">
            <div class="card-header border-bottom border-secondary d-flex align-items-center py-3" style="background-color: #343a40;">
                <button type="button" class="btn btn-outline-light btn-sm mr-3 btn-regresar-listado">
                    <i class="fas fa-chevron-left mr-1"></i> Volver a Convocatorias
                </button>
                <h4 class="modal-title font-weight-bold text-white mb-0" id="titulo-panel-apoyo">Carga de Documentos - Apoyo Alimentación</h4>
            </div>

            <div class="card-body bg-dark p-4">
                
                <!-- Resumen de Convocatoria Seleccionada -->
                <div class="bg-secondary rounded p-3 mb-4 border border-secondary shadow-sm" style="background-color: #2b3035 !important;">
                    <div class="row align-items-center">
                        <div class="col-md-9 mb-2 mb-md-0">
                            <h6 class="font-weight-bold text-success mb-1"><i class="fas fa-info-circle mr-1"></i> Información General de la Postulación</h6>
                            <p class="text-light mb-0" style="font-size: 0.9rem;">
                                Asegúrate de subir archivos en formato <strong>PDF</strong>. El tamaño máximo admitido es de <strong>5 MB</strong> por documento. Tu promedio debe ser coherente con el certificado de calificaciones cargado.
                            </p>
                        </div>
                        <div class="col-md-3 text-md-right">
                            <span class="text-muted d-block" style="font-size: 0.8rem;">Cierre de Convocatoria</span>
                            <span class="badge badge-danger font-weight-bold px-3 py-2" id="badge-fecha-limite" style="font-size: 0.9rem;">15/Junio/2026</span>
                        </div>
                    </div>
                </div>

                <!-- Contenedor Dinámico de Requisitos -->
                <div id="contenedor-requisitos-carga">
                    <!-- Los requisitos serán inyectados dinámicamente aquí vía jQuery -->
                </div>

            </div>

            <!-- Botones de Acción de Envío -->
            <div class="card-footer border-top border-secondary justify-content-between d-flex p-3" style="background-color: #343a40;">
                <button type="button" class="btn btn-outline-light font-weight-bold btn-regresar-listado">Cancelar</button>
                <div>
                    <button type="button" class="btn btn-secondary mr-2 font-weight-bold" id="btn-guardar-borrador-sim">
                        <i class="fas fa-save mr-1"></i> Guardar Borrador
                    </button>
                    <button type="button" class="btn btn-success font-weight-bold" id="btn-enviar-postulacion-sim">
                        <i class="fas fa-rocket mr-1"></i> Enviar Postulación
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ========================================================================================================
TEMPLATES HTML (Ocultos, utilizados para construir la interfaz de carga de requisitos mediante jQuery)
========================================================================================================= -->

<!-- Fila de Requisito para Documento -->
<template id="template-requisito-fila">
    <div class="card border border-secondary bg-dark mb-3 card-requisito" data-estado="pendiente" style="border-radius: 6px; transition: border 0.3s ease;">
        <div class="card-body p-3">
            <div class="row align-items-center">
                
                <!-- Info del Requisito -->
                <div class="col-md-5 mb-3 mb-md-0">
                    <div class="d-flex align-items-start">
                        <span class="indicator-icon bg-secondary text-white p-2 rounded mr-3 shadow-sm" style="width: 40px; text-align: center;">
                            <i class="fas fa-file-pdf"></i>
                        </span>
                        <div>
                            <h6 class="font-weight-bold text-white mb-1 doc-nombre">Nombre del Documento</h6>
                            <p class="text-muted mb-0 doc-desc" style="font-size: 0.8rem; line-height: 1.3;">
                                Requisito documental e instructivo detallado del archivo que debes subir.
                            </p>
                            <div class="mt-2">
                                <span class="badge badge-danger font-weight-bold mr-1 badge-obligatoriedad" style="font-size: 0.7rem; padding: 4px 6px;">OBLIGATORIO</span>
                                <span class="badge badge-dark text-muted border border-secondary font-weight-bold badge-puntaje" style="font-size: 0.7rem; padding: 3px 5px;">Puntaje Máx: 20 pts</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Estado Visual e Indicador del archivo -->
                <div class="col-md-4 mb-3 mb-md-0 text-md-center container-estado">
                    <!-- Estado 1: Pendiente de Subida -->
                    <div class="estado-pendiente">
                        <span class="badge badge-secondary px-3 py-2 font-weight-bold text-muted shadow-sm border border-secondary" style="border-radius: 12px; font-size: 0.8rem;">
                            <i class="fas fa-cloud-upload-alt mr-1"></i> Pendiente de Cargar
                        </span>
                    </div>

                    <!-- Estado 2: Archivo Cargado (Oculto inicialmente) -->
                    <div class="estado-cargado d-none">
                        <div class="alert alert-success border border-success p-2 mb-0 d-inline-flex align-items-center shadow-sm text-left" style="border-radius: 8px; font-size: 0.85rem; max-width: 100%;">
                            <i class="fas fa-check-circle fa-lg mr-2 text-success"></i>
                            <div class="text-truncate" style="max-width: 250px;">
                                <strong class="text-white d-block text-truncate nombre-archivo-cargado">mi_documento.pdf</strong>
                                <small class="text-muted d-block size-archivo-cargado">1.4 MB - Subido con éxito</small>
                            </div>
                        </div>
                    </div>

                    <!-- Estado 3: Observación de Rechazo (Oculto inicialmente) -->
                    <div class="estado-rechazado d-none">
                        <div class="alert alert-danger border border-danger p-2 mb-0 text-left shadow-sm" style="border-radius: 8px; font-size: 0.85rem;">
                            <div class="d-flex align-items-center mb-1">
                                <i class="fas fa-times-circle fa-lg mr-2 text-danger"></i>
                                <strong class="text-white">Documento Rechazado</strong>
                            </div>
                            <small class="text-white font-italic text-obs-rechazo">"La fecha del recibo venció el mes pasado."</small>
                        </div>
                    </div>
                </div>

                <!-- Widget de Subida / Acciones -->
                <div class="col-md-3 text-right">
                    
                    <!-- Formulario de carga de archivo -->
                    <div class="zona-subida-archivo">
                        <div class="dropzone-mock">
                            <i class="fas fa-cloud-upload-alt fa-lg text-success mb-1"></i>
                            <span class="d-block text-muted font-weight-bold" style="font-size: 0.75rem;">Buscar PDF / Imagen</span>
                            <small class="text-muted" style="font-size: 0.65rem;">Suelte o elija archivo</small>
                            <input type="file" class="file-uploader-input" accept="application/pdf, image/*">
                        </div>
                        
                        <!-- Barra de progreso simulada (Oculta por defecto) -->
                        <div class="progress progress-xxs mt-2 d-none progress-simulada" style="height: 6px; border-radius: 3px;">
                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                        </div>
                    </div>

                    <!-- Acciones cuando está cargado -->
                    <div class="acciones-archivo-cargado d-none">
                        <div class="btn-group shadow-sm">
                            <button type="button" class="btn btn-sm btn-info btn-ver-pdf-sim" title="Previsualizar Documento">
                                <i class="fas fa-eye mr-1"></i> Ver
                            </button>
                            <button type="button" class="btn btn-sm btn-danger btn-eliminar-pdf-sim" title="Eliminar archivo">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</template>

<!-- Modales de Simulación de Previsualización de Archivos -->
<div id="modal-visor-pdf-sim" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark text-white border border-secondary shadow">
            
            <div class="modal-header border-bottom border-secondary" style="background-color: #343a40;">
                <h5 class="modal-title font-weight-bold text-success"><i class="fas fa-file-pdf mr-2"></i> Visor de Documento Subido (Simulado)</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body p-0 text-center" style="background-color: #454d55;">
                <div class="p-5 text-muted">
                    <i class="far fa-file-pdf fa-5x mb-3 text-danger animate__animated animate__pulse animate__infinite"></i>
                    <h5 class="text-white font-weight-bold mb-2 file-name-modal">nombre_archivo.pdf</h5>
                    <p class="mb-4" style="font-size: 0.9rem; max-width: 500px; margin: 0 auto;">
                        Esta es una simulación visual. En la fase de controladores de negocio reales, aquí se cargará el iframe de PDF, la imagen del servidor, o el visor integrado de documentos.
                    </p>
                    <div class="d-inline-block border border-secondary rounded p-3 bg-dark">
                        <span class="text-muted d-block mb-1" style="font-size: 0.8rem;">Estado del archivo en servidor:</span>
                        <span class="badge badge-success font-weight-bold px-3 py-1"><i class="fas fa-check mr-1"></i> ALMACENADO CORRECTAMENTE</span>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer border-top border-secondary justify-content-end" style="background-color: #343a40;">
                <button type="button" class="btn btn-outline-light font-weight-bold" data-dismiss="modal">Cerrar Visor</button>
            </div>

        </div>
    </div>
</div>

<!-- ========================================================================================================
ESTILOS ADICIONALES LOCALES PARA LA MAQUETACIÓN PREMIUM
========================================================================================================= -->
<style>
    /* Estilos del área de carga simulada Dropzone */
    .dropzone-mock {
        border: 2px dashed #6c757d;
        border-radius: 6px;
        background-color: #343a40;
        padding: 12px 10px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .dropzone-mock:hover {
        border-color: #28a745;
        background-color: #3d454d;
        box-shadow: 0 0 8px rgba(40, 167, 69, 0.2);
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

    /* Animación simple en cards de convocatoria al pasar el mouse */
    .card-convocatoria:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4) !important;
        border-color: #6c757d !important;
    }

    /* Borde izquierdo dinámico para estados en tabla y cards */
    .border-left-success {
        border-left: 5px solid #28a745 !important;
    }
    .border-left-warning {
        border-left: 5px solid #ffc107 !important;
    }
    .border-left-info {
        border-left: 5px solid #17a2b8 !important;
    }
    .border-left-danger {
        border-left: 5px solid #dc3545 !important;
    }

    /* Estilo para las filas de requisitos en edición o carga */
    .card-requisito {
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card-requisito:hover {
        border-color: #4f5962 !important;
    }

    /* Sobrescribir estilos de pestañas para modo oscuro impecable */
    .card-dark.card-tabs .nav-tabs .nav-link.active {
        background-color: #2b3035 !important;
        border-color: #6c757d #6c757d transparent !important;
        color: #fff !important;
    }
    
    .card-dark.card-tabs .nav-tabs .nav-link {
        color: #adb5bd;
        border-top: 3px solid transparent;
    }

    .card-dark.card-tabs .nav-tabs .nav-link:hover {
        color: #fff;
        border-top-color: #6c757d;
        background-color: #343a40;
    }
    
    /* Datatables en modo oscuro */
    #tblMisPostulaciones_wrapper .dataTables_length, 
    #tblMisPostulaciones_wrapper .dataTables_filter, 
    #tblMisPostulaciones_wrapper .dataTables_info,
    #tblMisPostulaciones_wrapper .dataTables_paginate {
        color: #adb5bd !important;
        font-size: 0.9rem;
        margin-top: 10px;
    }
</style>

<!-- ========================================================================================================
LÓGICA DE INTERACTIVIDAD SIMULADA (JAVASCRIPT / JQUERY LOCAL)
========================================================================================================= -->
<script>
$(document).ready(function() {

    // Configuración inicial de Toastr si existe
    if (typeof toastr !== 'undefined') {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "3000"
        };
    }

    // Datos ficticios detallados por convocatoria para simular carga
    const baseRequisitos = {
        "Apoyo de Alimentación": [
            { nombre: "Fotocopia del Documento de Identidad (150%)", desc: "Escaneo legible por ambas caras de la CC o TI ampliada al 150%, consolidado en un solo documento PDF.", oblig: true, pts: 25 },
            { nombre: "Certificado de Calificaciones", desc: "Expedido por SofiaPlus. Debe registrar el promedio acumulado, el cual debe ser superior a 4.0 para habilitar el puntaje.", oblig: true, pts: 35 },
            { nombre: "Certificado Sisbén IV / Carta Población Vulnerable", desc: "Documento oficial del SISBÉN o carta oficial emitida por ente gubernamental certificando condición prioritaria.", oblig: true, pts: 40 }
        ],
        "Apoyo de Transporte": [
            { nombre: "Copia del Documento de Identidad (C.C)", desc: "Escaneo nítido del documento de identidad por ambos lados.", oblig: true, pts: 15 },
            { nombre: "Certificado Sisbén IV actualizado", desc: "Copia impresa de la consulta oficial de Sisbén IV donde figure el grupo del aprendiz.", oblig: true, pts: 25 },
            { nombre: "Recibo de Servicios Públicos Reciente (Estrato)", desc: "Último recibo de energía eléctrica o gas natural del domicilio donde habita. Debe ser estrato 1, 2 o 3.", oblig: true, pts: 30, esRechazado: true, obs: "El recibo cargado corresponde al año anterior. Favor subir un recibo reciente del mes en curso." },
            { nombre: "Formato de Ficha Socioeconómica Firmada", desc: "Descargue el formato oficial, llénelo, fírmelo a mano y escanéelo en formato PDF.", oblig: false, pts: 30 }
        ],
        "Apoyo Sostenimiento": [
            { nombre: "Documento Identidad", desc: "Copia legible de la cédula de ciudadanía.", oblig: true, pts: 20 },
            { nombre: "Certificado de Matrícula y Horario Dual", desc: "Formato oficial que acredite tu participación en la modalidad de formación dual con la empresa vinculada.", oblig: true, pts: 45 },
            { nombre: "Certificado de Cuenta Bancaria Activa", desc: "Expedido por tu entidad financiera con fecha no mayor a 30 días, que demuestre que eres el titular titular.", oblig: true, pts: 35 }
        ]
    };

    let convocatoriaSeleccionada = "";
    let esPostulacionExistente = false;

    // --- ACCIÓN: INICIAR POSTULACIÓN (DESDE LAS CARD GRID) ---
    $(".btn-iniciar-inscripcion").on("click", function() {
        const apoyo = $(this).data("apoyo");
        const fechas = $(this).data("fechas");
        const isNuevo = $(this).data("is-nuevo");
        
        cargarFormularioCarga(apoyo, fechas, isNuevo);
    });

    // --- ACCIÓN: CORREGIR POSTULACIÓN (DESDE LA TABLA) ---
    $(".btn-editar-postulacion-tabla").on("click", function() {
        cargarFormularioCarga("Apoyo de Transporte", "25/May/2026 - 10/Jun/2026", false);
    });

    // --- ACCIÓN: REGRESAR AL LISTADO ---
    $(".btn-regresar-listado").on("click", function() {
        $("#panel-carga-documentos").addClass("d-none");
        $("#panel-listados").removeClass("d-none");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });

    // --- FUNCIÓN: MONTAR EL FORMULARIO DE CARGA ---
    function cargarFormularioCarga(apoyo, fechas, isNuevo) {
        convocatoriaSeleccionada = apoyo;
        esPostulacionExistente = !isNuevo;

        // Configurar cabecera
        $("#titulo-panel-apoyo").html(`<i class="fas fa-file-invoice mr-2 text-success"></i>Postulación y Carga de Archivos - <strong>${apoyo}</strong>`);
        $("#badge-fecha-limite").text(fechas.split(" - ")[1]);

        // Limpiar contenedor de requisitos
        const $contenedor = $("#contenedor-requisitos-carga");
        $contenedor.empty();

        // Obtener la plantilla
        const template = document.getElementById("template-requisito-fila");

        // Cargar los requisitos definidos para el apoyo
        const requisitos = baseRequisitos[apoyo] || [];
        
        requisitos.forEach((req, idx) => {
            const clone = document.importNode(template.content, true);
            const $card = $(clone).find(".card-requisito");

            // Rellenar datos
            $card.find(".doc-nombre").text(req.nombre);
            $card.find(".doc-desc").text(req.desc);
            $card.find(".badge-puntaje").text(`Puntaje Máx: ${req.pts} pts`);
            
            // Asignar ID único al input de archivo para simulación
            $card.find(".file-uploader-input").attr("id", `file-input-${idx}`);

            // Obligatoriedad
            if (!req.oblig) {
                $card.find(".badge-obligatoriedad")
                     .removeClass("badge-danger")
                     .addClass("badge-secondary")
                     .text("OPCIONAL");
            }

            // Simular estados preexistentes si no es nueva
            if (esPostulacionExistente) {
                if (req.esRechazado) {
                    // Estado rechazado con observación
                    $card.attr("data-estado", "rechazado");
                    $card.find(".estado-pendiente").addClass("d-none");
                    $card.find(".estado-rechazado").removeClass("d-none");
                    $card.find(".text-obs-rechazo").text(`"${req.obs}"`);
                    $card.css("border-left", "5px solid #dc3545");
                } else {
                    // Estado ya cargado previamente
                    $card.attr("data-estado", "cargado");
                    $card.find(".estado-pendiente").addClass("d-none");
                    $card.find(".estado-cargado").removeClass("d-none");
                    
                    // Ficticio nombres y tamaños
                    const nombreFicticio = req.nombre.toLowerCase().replace(/[^a-z0-9]/g, "_") + "_aprobado.pdf";
                    $card.find(".nombre-archivo-cargado").text(nombreFicticio);
                    $card.find(".size-archivo-cargado").text("2.1 MB - Archivo del Servidor");
                    
                    // Cambiar widget de carga por acciones
                    $card.find(".zona-subida-archivo").addClass("d-none");
                    $card.find(".acciones-archivo-cargado").removeClass("d-none");
                    $card.css("border-left", "5px solid #28a745");
                }
            } else {
                $card.css("border-left", "5px solid #6c757d");
            }

            $contenedor.append($card);
        });

        // Alternar pantallas
        $("#panel-listados").addClass("d-none");
        $("#panel-carga-documentos").removeClass("d-none");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    }

    // --- ACCIÓN SIMULADA: SELECCIÓN / SUBIDA DE ARCHIVO ---
    $(document).on("change", ".file-uploader-input", function(e) {
        const file = e.target.files[0];
        if (!file) return;

        // Validar que sea un PDF o imagen (Simulación visual)
        const allowedTypes = ['application/pdf', 'image/jpeg', 'image/png', 'image/gif'];
        if (!allowedTypes.includes(file.type)) {
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    icon: 'error',
                    title: 'Formato no permitido',
                    text: 'Solo se permiten archivos PDF o imágenes.',
                    background: '#343a40',
                    confirmButtonColor: '#28a745'
                });
            } else {
                alert("Solo se permiten archivos PDF o imágenes.");
            }
            return;
        }

        const $input = $(this);
        const $card = $input.closest(".card-requisito");
        const $dropzone = $card.find(".dropzone-mock");
        const $progressBarContainer = $card.find(".progress-simulada");
        const $progressBar = $progressBarContainer.find(".progress-bar");

        // Deshabilitar input durante carga ficticia
        $input.prop("disabled", true);
        $dropzone.css("opacity", "0.5");
        $progressBarContainer.removeClass("d-none");

        // Simular progreso de subida en 1.5s
        let progress = 0;
        const interval = setInterval(function() {
            progress += 10;
            $progressBar.css("width", progress + "%").attr("aria-valuenow", progress);
            
            if (progress >= 100) {
                clearInterval(interval);
                
                // Finalizar simulación
                setTimeout(function() {
                    // Mostrar estado cargado con éxito
                    $card.attr("data-estado", "cargado");
                    $card.find(".estado-pendiente").addClass("d-none");
                    $card.find(".estado-rechazado").addClass("d-none");
                    $card.find(".estado-cargado").removeClass("d-none");
                    
                    // Rellenar datos reales del archivo subido
                    $card.find(".nombre-archivo-cargado").text(file.name);
                    const sizeMB = (file.size / (1024 * 1024)).toFixed(2);
                    $card.find(".size-archivo-cargado").text(`${sizeMB} MB - Cargado hace un momento`);

                    // Alternar botones
                    $card.find(".zona-subida-archivo").addClass("d-none");
                    $card.find(".acciones-archivo-cargado").removeClass("d-none");

                    // Estilo de borde
                    $card.css("border-left", "5px solid #28a745");

                    // Mostrar notificación
                    if (typeof toastr !== 'undefined') {
                        toastr.success(`Archivo "${file.name}" cargado con éxito.`, "Documento Listo");
                    }
                }, 300);
            }
        }, 150);
    });

    // --- ACCIÓN SIMULADA: ELIMINAR ARCHIVO CARGADO ---
    $(document).on("click", ".btn-eliminar-pdf-sim", function() {
        const $btn = $(this);
        const $card = $btn.closest(".card-requisito");

        if (typeof Swal !== 'undefined') {
            Swal.fire({
                title: '¿Eliminar documento?',
                text: "Deberás subir un nuevo archivo para completar el requisito.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar',
                background: '#343a40'
            }).then((result) => {
                if (result.isConfirmed) {
                    ejecutarEliminacion($card);
                }
            });
        } else {
            if (confirm("¿Estás seguro de eliminar este documento?")) {
                ejecutarEliminacion($card);
            }
        }
    });

    function ejecutarEliminacion($card) {
        $card.attr("data-estado", "pendiente");
        
        // Resetear visuales de carga
        $card.find(".estado-cargado").addClass("d-none");
        $card.find(".estado-rechazado").addClass("d-none");
        $card.find(".estado-pendiente").removeClass("d-none");
        
        // Volver a habilitar input y dropzone
        $card.find(".file-uploader-input").prop("disabled", false).val("");
        $card.find(".dropzone-mock").css("opacity", "1");
        $card.find(".progress-simulada").addClass("d-none").find(".progress-bar").css("width", "0%");

        // Mostrar zona de subida de nuevo
        $card.find(".zona-subida-archivo").removeClass("d-none");
        $card.find(".acciones-archivo-cargado").addClass("d-none");

        // Borde neutro
        $card.css("border-left", "5px solid #6c757d");

        if (typeof toastr !== 'undefined') {
            toastr.info("El archivo ha sido removido.", "Documento Removido");
        }
    }

    // --- ACCIÓN SIMULADA: PREVISUALIZAR ARCHIVO (MODAL) ---
    $(document).on("click", ".btn-ver-pdf-sim", function() {
        const $btn = $(this);
        const $card = $btn.closest(".card-requisito");
        const nombreArchivo = $card.find(".nombre-archivo-cargado").text();
        
        $("#modal-visor-pdf-sim").find(".file-name-modal").text(nombreArchivo);
        $("#modal-visor-pdf-sim").modal("show");
    });

    // --- ACCIÓN SIMULADA: GUARDAR BORRADOR ---
    $("#btn-guardar-borrador-sim").on("click", function() {
        if (typeof Swal !== 'undefined') {
            Swal.fire({
                icon: 'success',
                title: '¡Borrador Guardado!',
                text: 'Tus documentos se almacenaron temporalmente en el servidor. Podrás completar tu envío en cualquier momento antes de la fecha de cierre.',
                background: '#343a40',
                confirmButtonColor: '#28a745'
            }).then(() => {
                // Volver a la pantalla principal
                $(".btn-regresar-listado").trigger("click");
            });
        } else {
            alert("¡Borrador Guardado! Se ha guardado temporalmente.");
            $(".btn-regresar-listado").trigger("click");
        }
    });

    // --- ACCIÓN SIMULADA: ENVIAR POSTULACIÓN COMPLETA ---
    $("#btn-enviar-postulacion-sim").on("click", function() {
        let docsPendientes = 0;
        let totalDocs = 0;

        // Comprobar estado de los documentos requeridos
        $("#contenedor-requisitos-carga .card-requisito").each(function() {
            totalDocs++;
            const estado = $(this).attr("data-estado");
            const esObligatorio = $(this).find(".badge-obligatoriedad").hasClass("badge-danger");
            
            if (esObligatorio && estado !== "cargado") {
                docsPendientes++;
            }
        });

        if (docsPendientes > 0) {
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    icon: 'error',
                    title: 'Inscripción Incompleta',
                    text: `Faltan subir ${docsPendientes} documento(s) de carácter OBLIGATORIO para esta convocatoria.`,
                    background: '#343a40',
                    confirmButtonColor: '#dc3545'
                });
            } else {
                alert(`Inscripción Incompleta. Faltan subir ${docsPendientes} documento(s) obligatorios.`);
            }
            return;
        }

        // Si todos los requeridos están listos, confirmar envío
        if (typeof Swal !== 'undefined') {
            Swal.fire({
                title: '¿Confirmar envío de postulación?',
                text: "Una vez enviada, no podrás realizar más cambios a los documentos mientras estén en fase de revisión.",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#28a745',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Sí, enviar postulación',
                cancelButtonText: 'Cancelar',
                background: '#343a40'
            }).then((result) => {
                if (result.isConfirmed) {
                    finalizarPostulacionConExito();
                }
            });
        } else {
            if (confirm("¿Estás seguro de enviar tu postulación?")) {
                finalizarPostulacionConExito();
            }
        }
    });

    function finalizarPostulacionConExito() {
        if (typeof Swal !== 'undefined') {
            Swal.fire({
                icon: 'success',
                title: '¡Postulación Enviada con Éxito!',
                text: `Tu solicitud para "${convocatoriaSeleccionada}" fue registrada correctamente. Se iniciará la revisión de documentos por parte del equipo evaluador.`,
                background: '#343a40',
                confirmButtonColor: '#28a745'
            }).then(() => {
                actualizarEstadoMockupEnTabla();
            });
        } else {
            alert("¡Postulación Enviada con Éxito!");
            actualizarEstadoMockupEnTabla();
        }
    }

    function actualizarEstadoMockupEnTabla() {
        // Simular que agregamos o modificamos la tabla de postulación
        if (convocatoriaSeleccionada === "Apoyo de Alimentación") {
            // Añadir fila
            const fechaActualStr = new Date().toLocaleDateString('es-ES', { day: '2-digit', month: 'short', year: 'numeric' });
            
            // Verificar si ya existe
            if ($("#fila-postulacion-alimentacion").length === 0) {
                const filaHtml = `
                    <tr id="fila-postulacion-alimentacion">
                        <td>2</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="text-success mr-2" style="font-size: 1.1rem;"><i class="fas fa-utensils"></i></span>
                                <span class="font-weight-bold">Apoyo de Alimentación</span>
                            </div>
                        </td>
                        <td>${fechaActualStr}</td>
                        <td class="font-weight-bold">0.00 pts</td>
                        <td>
                            <span class="badge badge-info font-weight-bold px-2 py-1" style="font-size: 0.85em; border-radius: 4px;">
                                <i class="fas fa-spinner fa-spin mr-1"></i> En Verificación
                            </span>
                        </td>
                        <td class="text-muted font-italic" style="font-size: 0.88rem;">
                            "Documentos recibidos. Esperando asignación de evaluador."
                        </td>
                        <td class="text-center">
                            <span class="text-muted" style="font-size: 0.85rem;"><i class="fas fa-lock"></i> Enviado</span>
                        </td>
                    </tr>
                `;
                $("#tblMisPostulaciones tbody").append(filaHtml);
                
                // Actualizar KPI
                $("#kpi-postulaciones").text("2");
                $("#badge-contador-postulaciones").text("2");
            }
        } else if (convocatoriaSeleccionada === "Apoyo de Transporte") {
            // Modificar la fila existente de corrección requerida a En Verificación
            const $fila = $("#fila-postulacion-transporte");
            $fila.find("td:nth-child(4)").text("0.00 pts"); // reset o mantener
            $fila.find("td:nth-child(5)").html(`
                <span class="badge badge-info font-weight-bold px-2 py-1" style="font-size: 0.85em; border-radius: 4px;">
                    <i class="fas fa-spinner fa-spin mr-1"></i> En Verificación
                </span>
            `);
            $fila.find("td:nth-child(6)").html('<span class="text-muted font-italic" style="font-size: 0.88rem;">"Corrección recibida con éxito. Documentos en re-evaluación."</span>');
            $fila.find("td:nth-child(7)").html('<span class="text-muted" style="font-size: 0.85rem;"><i class="fas fa-lock"></i> Enviado</span>');

            // Actualizar KPI
            $("#kpi-correcciones").text("0").removeClass("text-warning").addClass("text-white");
        }

        // Ir a la pestaña de postulaciones
        $('#tabInscripciones a[href="#tab-postulaciones"]').tab('show');

        // Volver a la pantalla principal
        $(".btn-regresar-listado").trigger("click");
    }

});
</script>
