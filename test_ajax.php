<?php
$_POST['idApoyo'] = 1;
require 'ajax/apoyos.ajax.php';
$editar = new AjaxApoyos();
$editar->idApoyo = 1;
$editar->ajaxEditarApoyo();
