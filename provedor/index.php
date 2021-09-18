<?php
define('ROOTPATH', dirname(__FILE__));
require_once ROOTPATH.'/../lib/SimpleTemplateEngine/loader.php';
require_once ROOTPATH.'/../src/servicios/ProovedorService.php';

$env = new SimpleTemplateEngine\Environment($_SERVER['DOCUMENT_ROOT'].'/src/views');

$service = new ProovedorService();
$provedores = $service->getAll();
$datos = [
    "provedores" => $provedores,
];

echo $env->render('provedores.php', $datos);

?>
