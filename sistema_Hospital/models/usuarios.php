<?php
class usuarios {

    private $identificacion;
    private $nombre;
    private $primerApellido;
    private $segundoApellido;
    private $direccion;
    private $rh;
    private $genero;
    private $correo;
    private $fechaNacimiento;
    private $telefono;
    private $rol;
    private $contraseña;
    
    public function __construct() {
        
    }
    public function getIdentificacion() {
        return $this->identificacion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrimerApellido() {
        return $this->primerApellido;
    }

    public function getSegundoApellido() {
        return $this->segundoApellido;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getRh() {
        return $this->rh;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getRol() {
        return $this->rol;
    }

    public function getContraseña() {
        return $this->contraseña;
    }

    public function setIdentificacion($identificacion): void {
        $this->identificacion = $identificacion;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setPrimerApellido($primerApellido): void {
        $this->primerApellido = $primerApellido;
    }

    public function setSegundoApellido($segundoApellido): void {
        $this->segundoApellido = $segundoApellido;
    }

    public function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    public function setRh($rh): void {
        $this->rh = $rh;
    }

    public function setGenero($genero): void {
        $this->genero = $genero;
    }

    public function setCorreo($correo): void {
        $this->correo = $correo;
    }

    public function setFechaNacimiento($fechaNacimiento): void {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function setRol($rol): void {
        $this->rol = $rol;
    }

    public function setContraseña($contraseña): void {
        $this->contraseña = $contraseña;
    }

}

?>
