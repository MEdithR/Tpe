<?php

class ResponsableV{
    private $numEmp;
    private $numLic;
    private $nomResp;
    private $apeResp;

    public function __construct($numEmp,$numLic,$nomResp,$apeResp){
        $this->numEmp=$numEmp;
        $this->numLic=$numLic;
        $this->nomResp=$nomResp;
        $this->apeResp=$apeResp;
    }

    public function getNumEmp(){
        return $this->numEmp;
    }

    public function getNumLic(){
        return $this->numLic;
    }

    public function getNomResp(){
        return $this->nomResp;
    }

    public function getApeResp(){
        return $this->apeResp;
    }

    public function setNumEmp($numEmp){
        $this->numEmp=$numEmp;
    }

    public function setNumLic($numLic){
        $this->numLic=$numLic;
    }

    public function setNomResp($nomResp){
        $this->nomResp=$nomResp;
    }

    public function SetApeResp($apeResp){
        $this->apeResp=$apeResp;
    }
}