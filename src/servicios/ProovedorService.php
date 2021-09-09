<?php
require_once 'src/repository/Connection.php';
require_once 'src/data/entitys/Proovedores.php';

class ProovedorService {

    /**
     * Esta asdasdsad
     * @return Provedor[]
     */
    function getAll() {
        $db = new Connection();
        $sql = 'SELECT * FROM clinica.Proveedores;';
        $res = mysqli_query($db->conn, $sql);
        $proveedores = [];
        while($row = mysqli_fetch_assoc($res)) {
            $p = new Proovedor(
                $row['id'], 
                $row['ruc'],
                $row['nombres'], 
                $row['numeroTelefonico'], 
                $row['paginaWeb']
            );
            $proveedores[] = $p;
        }
        $db->closeConnection();
        return $proveedores;
    }

    function getById($id) {
        $db = new Connection();
        $sql = 'SELECT * FROM clinica.Proveedores WHERE id = $id;';
        $res = mysqli_query($db->conn, $sql);
        $proveedores = [];
        while($row = mysqli_fetch_assoc($res)) {
            $p = new Proovedor(
                $row['id'], 
                $row['ruc'],
                $row['nombres'], 
                $row['numeroTelefonico'], 
                $row['paginaWeb']
            );
            $proveedores[] = $p;
        }
        $db->closeConnection();
        return $proveedores[0];
    }
}


?>