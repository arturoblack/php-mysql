<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/src/data/entitys/Proovedores.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/src/servicios/ProovedorService.php';

$provedor = new Proovedor(
    0, 
    $_POST['ruc'],
    $_POST['nombre'], 
    $_POST['telefono'], 
    $_POST['web']
);
$service = new ProovedorService();
$service->create($provedor);
header("Location: /provedor");
die();

?>