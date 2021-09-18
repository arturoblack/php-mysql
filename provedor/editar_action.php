<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/src/data/entitys/Proovedores.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/src/servicios/ProovedorService.php';

$provedor = new Proovedor(
    $_POST['id'], 
    $_POST['ruc'],
    $_POST['nombre'], 
    $_POST['telefono'], 
    $_POST['web']
);
$service = new ProovedorService();
$service->update($provedor);
header("Location: /provedor");
die();

?>