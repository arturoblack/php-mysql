<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/repository/Connection.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/src/data/entitys/Proovedores.php';

class ProovedorService {

    /**
     * Obtener todos los provedores
     * de la base de datos
     * @return Proovedor[]
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

    function get($id) {
        $db = new Connection();
        $sql = "SELECT * FROM clinica.Proveedores WHERE id = $id;";
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

    function create($provedor) {
        $db = new Connection();
        $sql = "
        INSERT INTO Proveedores
        (ruc, nombres , numeroTelefonico, paginaWeb)
        VALUES 
        ('$provedor->ruc' 
         ,'$provedor->nombres'
         ,'$provedor->numeroTelefonico' 
         ,'$provedor->paginaWeb');
        ";
        $res = mysqli_query($db->conn, $sql);
        $db->closeConnection();
    }

    function update($provedor) {
        $db = new Connection();
        $sql = "
        UPDATE Proveedores
        SET 
            ruc = '$provedor->ruc'
            ,nombres = '$provedor->nombres'
            ,numeroTelefonico = '$provedor->numeroTelefonico'
            ,paginaWeb = '$provedor->paginaWeb'
        WHERE id = $provedor->id;
        ";
        //echo $sql;
        $res = mysqli_query($db->conn, $sql);
        $db->closeConnection();
    }

    function delete($id) {
        $db = new Connection();
        $sql = "
        DELETE FROM Proveedores
        WHERE id = $id;
        ";
        $res = mysqli_query($db->conn, $sql);
        $db->closeConnection();
    }

    /**
     * Retorna el provedor con 
     * el id enviado
     * @param id ID Codigo unico del proovedor
     * @return Proovedor
     */
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