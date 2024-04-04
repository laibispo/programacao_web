<?php
class Veiculo {
    private $renavam;
    private $marca;
    private $modelo;
    private $cor;
    private $anoModelo;
    private $anoFabricacao;

    public function __construct(){}
     
    public function getRenavam(){
       return $this->renavam;
    }

    public function setRenavam($renavam){
       $this->renavam = $renavam;
    }

    public function getMarca(){
       return $this->marca;
    }

    public function setMarca($marca){
       $this->marca = $marca;
    }

     public function getModelo(){
        return $this->modelo;
     }

     public function setModelo($modelo){
         $this->modelo = $modelo;
     }

     public function getCor(){
         return $this->cor;
     }

     public function setCor($cor){
         $this->cor = $cor;
     }

     public function getAnoModelo(){
         return $this->anoModelo;
     }

     public function setAnoModelo($anoModelo){
         $this->anoModelo = $anoModelo;
     }

     public function getAnoFabricacao(){
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao($anoFabricacao){
        $this->anoFabricacao = $anoFabricacao;
    }
 }
?>