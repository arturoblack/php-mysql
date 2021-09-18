<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/lib/SimpleTemplateEngine/loader.php';
$env = new SimpleTemplateEngine\Environment($_SERVER['DOCUMENT_ROOT'].'/src/views');
$datos = [
    "action" => "/provedor/nuevo_action.php",
    "provedor" => NULL,
    "titulo" => "Nuevo provedor",
    "boton" => "Crear",
];
echo $env->render('formulario-provedor.php', $datos);
?>
