<?php
// Clase Artículo
class Articulo{
    public $nombre;
    public $precio;
    public $disponibilidad;
    public $categoría;

    public function __construct($nombre, $precio, $disponibilidad, $categoría){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponibilidad = $disponibilidad;
        $this->categoría = $categoría;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }

    public function setDisponibilidad($disponibilidad)
    {
        $this->disponibilidad = $disponibilidad;

        return $this;
    }

    public function getCategoría()
    {
        return $this->categoría;
    }

    public function setCategoría($categoría)
    {
        $this->categoría = $categoría;

        return $this;
    }


}
