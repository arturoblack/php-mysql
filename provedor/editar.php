<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/lib/SimpleTemplateEngine/loader.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/src/servicios/ProovedorService.php';
$env = new SimpleTemplateEngine\Environment($_SERVER['DOCUMENT_ROOT'].'/src/views');

$service = new ProovedorService();
$provedor = $service->get($_GET["id"]);

$datos = [
    "action" => "/provedor/editar_action.php",
    "provedor" => $provedor,
    "titulo" => "Editar provedor $provedor->nombres",
    "boton" => "Actualizar",
];
echo $env->render('formulario-provedor.php', $datos);

?>