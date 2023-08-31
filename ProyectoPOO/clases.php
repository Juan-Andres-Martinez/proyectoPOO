<?php 

class Persona 
{
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $perfil;

    public function __construct($nombre,$apellido,$correo,$telefono,$perfil)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->perfil = $perfil;
    }

    public function getNombre (){
        return $this->nombre;
    }
    
    public function getApellido (){
        return $this->apellido;
    }

    public function getCorreo (){
        return $this->correo;
    }

    public function getPerfil (){
        return $this->perfil;
    }

    public function getTelefono (){
        return $this->telefono;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    public function setCorreo ($correo){
        $this->correo = $correo;
    }

    public function setPerfil ($perfil){
        $this->perfil = $perfil;
    }

    public function setTelefono ($telefono){
        $this->telefono = $telefono;
    }

    public function mostrarInfo (){
        echo "nombre: ".$this->nombre." Apellidos: ".$this->apellido." Correo: ".$this->correo." Telefono: ".$this->telefono;
    }
} 

class Profesional extends Persona {
    private $portafolio;
    private $calificacion;
    private $servicio;
    public function __construct($nombre,$apellido,$correo,$telefono,$perfil,$portafolio,$calificacion,$servicio)
    {
        parent::__construct($nombre,$apellido,$correo,$telefono,$perfil);
        $this->portafolio = $portafolio;
        $this->calificacion = $calificacion;
        $this->servicio = $servicio;
    }
    public function setPortafolio(){
        return $this->portafolio;
    }
    public function setCalificacion(){
        return $this->calificacion;
    }
    public function setServicio(){
        return $this->servicio;
    }
    public function getPortafolio($portafolio){
        $this->portafolio = $portafolio;
    }
    public function getCalificacion($calificacion){
        $this->calificacion = $calificacion;
    }
    public function getServicio($servicio){
        $this->servicio = $servicio;
    }
}

class Cliente extends Persona {
    private $documento;
    private $pagos;

    public function __construct($nombre,$apellido,$correo,$telefono,$perfil,$documento,$pagos){
        parent::__construct($nombre,$apellido,$correo,$telefono,$perfil);
        $this->documento = $documento;
        $this->pagos = $pagos;
    }

    public function setDocumento(){
        return $this->documento;
    }
    public function setPagos(){
        return $this->pagos;
    }
    public function getPagos($pagos){
        $this->pagos = $pagos;
    }
}

// class Prueba {
//     private $nombre;

//     public function __construct($nombre){
//         $this->nombre = $nombre;
//     }

//     public function getNombre(){
//         return $this->nombre;
//     }
// }
?>