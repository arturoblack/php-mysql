<?php
require_once 'lib/SimpleTemplateEngine/loader.php';
require_once 'src/servicios/ProovedorService.php';

$env = new SimpleTemplateEngine\Environment('./src/views');

$service = new ProovedorService();
$provedores = $service->getAll();
$datos = [
    "provedores" => $provedores,
];

echo $env->render('provedores.php', $datos);

?>
