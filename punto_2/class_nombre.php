<?php
//EN ESTE ARCHIVO VA TU CLASE

class cliente{
    public $nombre;
    public $ciudad;
    public $talla_z;
    public $total;

    function __construct($info_1, $info_2, $info_3)
    {
        $this->nombre = $info_1;
        $this->ciudad = $info_2;
        $this->talla_z = $info_3;
    }

    function pedir_infos(){
        $this->infostotal = $this->nombre .'-'. $this->ciudad .'-'.$this->talla_z;
        return $this->infostotal;
    }
}
