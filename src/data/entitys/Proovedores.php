<?php

/**
 * Entidad proveedor
 * Esta entidad hace referencia a 
 * los proovedores de productos de 
 * la cilica toyKurao
 */
class Proovedor {
    /**
     * Identificado primario
     */
    public $id;
    /**
     * RUC 11 digitos
     */
    public $ruc;
    /**
     * Nombre de la empresas
     */
    public $nombres;
    /**
     * Numero telefonico de 
     * la sede central de la empresa
     */
    public $numeroTelefonico;
    /**
     * Pagina web de la empresa
     */
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