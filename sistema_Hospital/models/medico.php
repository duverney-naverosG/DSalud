<?php
	class Medico{
		private $identificacion;
		private $nombre;
		private $primerApellido;
		private $segundoApellido;
		private $fechaNacimiento;
		private $correo;
		private $direccion;
		private $rh;
		private $telefono;
        private $contraseña;
        private $idHospital;
        private $rol;
		private $estado;
		private $genero;
 
		function __construct(){}
        

        // funcion nombre
		public function getIdentificacion(){
		    return $this->identificacion;
		}
 
		public function setIdentificacion($identificacion){
			$this->identificacion = $identificacion;
		}

        public function getNombre(){
		    return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

        public function getPrimerApellido(){
		    return $this->primerApellido;
		}
 
		public function setPrimerApellido($primerApellido){
			$this->primerApellido = $primerApellido;
		}

        public function getSegundoApellido(){
		    return $this->segundoApellido;
		}
 
		public function setSegundoApellido($segundoApellido){
			$this->segundoApellido = $segundoApellido;
		}

        public function getFechaNacimiento(){
		    return $this->fechaNacimiento;
		}
 
		public function setFechaNacimiento($fechaNacimiento){
			$this->fechaNacimiento = $fechaNacimiento;
		}

		public function getDireccion(){
		    return $this->direccion;
		}
 
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}

        public function getCorreo(){
		    return $this->correo;
		}
 
		public function setCorreo($correo){
			$this->correo = $correo;
		}

        public function getRh(){
		    return $this->rh;
		}
 
		public function setRh($rh){
			$this->rh = $rh;
		}

        public function getTelefono(){
		    return $this->telefono;
		}
 
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}

        public function getContraseña(){
		    return $this->contraseña;
		}
 
		public function setContraseña($contraseña){
			$this->contraseña = $contraseña;
		}

        public function getIdhospital(){
		    return $this->idhospital;
		}
 
		public function setIdhospital($idhospital){
			$this->idhospital = $idhospital;
		}

        public function getRol(){
		    return $this->rol;
		}
 
		public function setRol($rol){
			$this->rol = $rol;
		}  
		
		public function getEstado(){
		    return $this->estado;
		}
 
		public function setEstado($estado){
			$this->estado = $estado;
		}

		public function getGenero(){
		    return $this->genero;
		}
 
		public function setGenero($genero){
			$this->genero = $genero;
		}
		
	}
?>