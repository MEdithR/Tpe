<?php
class Pasajeros{
    private $nombrePas;
    private $apellidoPas;
    private $numDoc;
    private $telefono;

    public function __construct($nombre,$aprllido,$doc,$tel){
        $this->nombrePas=$nombre;
        $this->apellidoPas=$apellido;
        $this->numDoc=$doc;
        $this->telefono=$tel;
    }

    public function getNombrePas(){
        return $this->nombrePas;
    }

    Public function getApellidoPas(){
        return $this->apellidoPas;
    }

    public function getNumDoc(){
        return $this->numDoc;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setNombrePas($nombre){
        $this->nombrePas=$nombre;
    }

    public function setApellidoPas($apellido){
        $this->apellidosPas=$apellido;
    }

    public function setNumDoc($doc){
        $this->numDoc=$doc;
    }

    public function setTelefono($tel){
        $this->telefono=$tel;
    }

    


}