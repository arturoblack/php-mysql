<?php

class Proovedor {
    public $id;
    public $ruc;
    public $nombres;
    public $numeroTelefonico;
    public $paginaWeb;

    function __construct($id, $ruc, $nombres, $numeroTelefonico, $paginaWeb) {
        $this->id = $id;
        $this->ruc = $ruc;
        $this->nombres = $nombres;
        $this->numeroTelefonico = $numeroTelefonico;
        $this->paginaWeb = $paginaWeb;
    }

}


?>