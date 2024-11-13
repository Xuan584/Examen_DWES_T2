<?php
// Clase Bebida que hereda de Artículo

class Bebida extends Articulo{
    public $tamaño;
    public $temperatura;

    public function __construct($nombre, $precio, $disponibilidad, $categoría, $tamaño, $temperatura){
        parent::__construct($nombre,$precio,$disponibilidad,$categoría);
        $this->tamaño = $tamaño;
        $this->temperatura = $temperatura;
    }
 
    public function getTamaño()
    {
        return $this->tamaño;
    }

    public function setTamaño($tamaño)
    {
        $this->tamaño = $tamaño;

        return $this;
    }

    public function getTemperatura()
    {
        return $this->temperatura;
    }

    public function setTemperatura($temperatura)
    {
        $this->temperatura = $temperatura;

        return $this;
    }
}
