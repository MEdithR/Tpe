<?php

class Viaje{

    private $codViaje;
    private $destino;
    private $cantMaxPasaj;
    private $pasViaje;

    Public function __construct($codVia,$dest,$cantMax,$pasajerosVi){

        $this->codViaje=$codVia;
        $this->destino=$dest;
        $this->cantMaxPasaj=$cantMax;
        $this->pasViaje=$pasajerosVi;

    }

    public function getCodViaje(){
        return $this->codViaje;
    }

    public function getDestino(){
      return  $this->destino;
    }

    public function getCantMaxPasaj(){
       return $this->cantMaxPasaj;
    }

    public function getPasViaje(){
         return $this->pasViaje;
    }

    public function setCodViaje($codVia){
        $this->codViaje=$codVia;
    }

    public function setDestino($dest){
        $this->destino=$dest;
    }

    public function setCantMaxPasaj($cantMax){
        $this->cantMaxPasaj=$cantMax;
    }

    public function setPasViaje($pasajerosVi){
        $this->pasViaje=$pasajerosVi;
    }

    public function arrayPasajeros($nombe,$apellido,$numDoc){
        $lisPas=$this->getPasViaje();
       
        if(count($lisPas)< $this->cantMaxPasaj){
                $lisPas= ["nombre"=>$nombre, "apellido"=>$apellido, "numero_documento"=>$numDoc]; 
                array_push($arrayPasajeros,$listaPasajeros);                            
                $this->setPasVije($lisPasa);                                                 
            }   
        }

    }

