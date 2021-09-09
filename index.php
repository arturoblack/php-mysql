<?php
require_once 'src/servicios/ProovedorService.php';


$service = new ProovedorService();

$provedores = $service->getAll();

foreach($provedores as $pro) {
    echo $pro->nombres;
    echo '<br/>';
}
echo 'hola mundo';

?>