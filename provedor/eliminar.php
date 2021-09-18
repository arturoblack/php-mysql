<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/servicios/ProovedorService.php';
$service = new ProovedorService();
$service->delete($_GET["id"]);
header("Location: /provedor");   

?>