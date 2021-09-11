<?php

class Connection {
    public $conn;
    private $host = '127.0.0.1';
    private $username = 'root';
    private $password = 'rootpwd';
    private $db = 'clinica';

    function __construct()
    {
        $this->conn = mysqli_connect(
            $this->host, $this->username, 
            $this->password, $this->db);
    }

    function closeConnection() {
        mysqli_close($this->conn);
    }

}

?>