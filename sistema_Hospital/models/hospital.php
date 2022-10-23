<?php
class hospital {

    private $id;
    private $nombre;
    private $ciudad;
    private $direccion;
    private $telefono;
    private $estado;

    public function __construct() {
        
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setCiudad($ciudad): void {
        $this->ciudad = $ciudad;
    }

    public function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

}
?>