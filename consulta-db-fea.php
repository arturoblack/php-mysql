<?php
// STACK LAMP
// Linux Apache Mysql PHP
$con = mysqli_connect('127.0.0.1', 'root', 'rootpwd', 'clinica');

if ($con == false){
    echo 'no se conecto a la BD';
    // terminar el programa
} else {
    $consulta = "
        SELECT * FROM Proveedores;
    ";
    
    $resultado = mysqli_query($con, $consulta);
    
    $provedores = [];
    while($row = mysqli_fetch_assoc($resultado)) {
        $provedores[] = $row;
    }
    
    foreach($provedores as $provedor) {
        echo $provedor['nombres'];
    }
    echo '<br/>--------<br/>';
}

mysqli_close($con);